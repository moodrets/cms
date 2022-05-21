import axios from "axios";
import { BASE_API_URL, BASE_URL, API_DEBOUNCE } from "@/const.js";

const httpAdapter = require("axios/lib/adapters/http");
const settle = require("axios/lib/core/settle");

const tokens = {};
const CancelToken = axios.CancelToken;

const customAdapter = (config) => {
  console.log(config);
  if (config.method === "get") {
    const cachedValue = localStorage.getItem(
      `request:${JSON.stringify({ url: config.url, params: config.params })}`
    );

    if (cachedValue) {
      return new Promise((resolve, reject) => {
        settle(resolve, reject, JSON.parse(cachedValue));
      });
    }
  }

  return new Promise((resolve, reject) => {
    httpAdapter(config)
      .then((response) => {
        localStorage.setItem(
          `request:${JSON.stringify({
            url: config.url,
            params: config.params,
          })}`,
          JSON.stringify(response)
        );
        setTimeout(() => {
          localStorage.removeItem(
            `request:${JSON.stringify({
              url: config.url,
              params: config.params,
            })}`
          );
        }, API_DEBOUNCE);
        settle(resolve, reject, response);
      })
      .catch(reject);
  });
};

export default new (class ApiService {
  constructor() {
    this.client = null;
  }

  async initClient() {
    this.client = axios.create({
      baseURL: `${BASE_API_URL}`,
      adapter: customAdapter,
      withCredentials: true,
      headers: {
        Accept: "application/json",
      },
    });
    //await this.setErrorInterceptors(errorFunction);
    //await this.getCSRFCookie();
  }
  async getCSRFCookie() {
    await this.client.get(`${BASE_URL}/sanctum/csrf-cookie`);
  }
  setToken(token) {
    this.client.defaults.headers = {
      ...this.client.defaults.headers,
      Authorization: `Bearer ${token}`,
    };
  }

  setErrorInterceptors(errorFunction) {
    this.client.interceptors.request.use(
      (config) => {
        try {
          if (!tokens[config.url]) {
            const source = CancelToken.source();

            config.cancelToken = source.token;
            tokens[config.url] = source;
          } else {
            const source = CancelToken.source();

            tokens[config.url].cancel();

            tokens[config.url] = source;
            config.cancelToken = source.token;
          }
        } catch (e) {
          console.log(e);
        }

        return config;
      },
      (error) => {
        if (error.response && error.response.status !== 500) {
          errorFunction(error);
        }
        return Promise.reject(error.response);
      }
    );
  }
})();

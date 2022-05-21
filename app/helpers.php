<?php

use Illuminate\Support\Facades\Request;


function activeMenu($uri = '')
{
    $active = '';
    if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
        $active = 'active';
    }
    return $active;
}


function getImageByPivotValue($array, $findKey)
{
    return $array->first(function ($value, $key) use ($findKey) {
        return $value->pivot->value === $findKey;
    });
}

function getImagesByPivotValue($array, $findKey)
{
    return $array->filter(function ($value, $key) use ($findKey) {
        return $value->pivot->value === $findKey;
    });
}

function getAttributeByPivotValue($array, $findKey, $attrKey = null)
{
    return $array->first(function ($value, $key) use ($findKey, $attrKey) {
        return $value[$attrKey ? $attrKey : 'title'] === $findKey;
    });
}

function getAttributeByName($array, $findKey)
{
    return $array->first(function ($value, $key) use ($findKey) {
        return $value->name === $findKey;
    });
}


function getAttributesByName($array, $findKey)
{
    return $array->filter(function ($value, $key) use ($findKey) {
        return $value->name === $findKey;
    });
}

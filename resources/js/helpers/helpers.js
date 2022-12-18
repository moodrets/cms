export function initPlansPolygons() {
    const $svgList = document.querySelectorAll('.js-plan-svg')
    $svgList.forEach(($svg) => {
        const $polygons = $svg.querySelectorAll('polygon')
        const $planWrapper = $svg.closest('.js-plan-wrapper')
        const $svgPoints = $svg.getBoundingClientRect()

        $polygons.forEach((poly, index) => {
            const status = poly.dataset.status
            const number = poly.dataset.number
            const polyPoints = poly.getBoundingClientRect()
            const cx = polyPoints.left - $svgPoints.left + polyPoints.width / 2.5
            const cy = polyPoints.top - $svgPoints.top + polyPoints.height / 2.5

            $planWrapper.insertAdjacentHTML(
                'beforeend',
                `
                    <div style="left: ${cx}px; top: ${cy}px;" class="poly-point${
                    status && status === 'busy' ? ' busy' : ''
                }">
                        ${number ? number : ''}
                    </div>
                `
            )
        })
    })
}

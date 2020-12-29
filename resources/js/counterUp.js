// Start counting, do this on DOM ready or with Waypoints.
import counterUp from 'counterup2';

let el = document.querySelector('#counter');
contar(el);
el = document.querySelector('#counter2');
contar(el);

function contar(el) {
    counterUp(el, { duration: 2000, delay: 16 });
    require('waypoints/lib/noframework.waypoints.js')
    new Waypoint({
        element: el,
        handler: function() {
            counterUp(el)
            this.destroy()
        },
        offset: 'bottom-in-view',
    });
}

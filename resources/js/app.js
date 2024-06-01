import './bootstrap';

/*
import.meta.glob([
    '../images/!**',
]);
*/


Livewire.hook('morph.updating',  ({ el, component, toEl, skip, childrenOnly }) => {
    el.classList.forEach(function(element) {
        // Check if the first word is prefix
        if (element.indexOf('q-') == 0) {
            skip()
        }
    });

    toEl.classList.forEach(function(element) {
        // Check if the first word is prefix
        if (element.indexOf('q-') == 0) {
            skip()
        }
    });
})

Livewire.hook('morph.updated', ({ el, component }) => {
    //
})

Livewire.hook('morph.removing', ({ el, component, skip }) => {
    console.log('morph.removing')

    console.log(el)

    el.classList.forEach(function(element) {
        // Check if the first word is prefix
        if (element.indexOf('q-') == 0) {
            skip()
        }
    });
})

Livewire.hook('morph.removed', ({ el, component }) => {
    console.log('morph.removed')
    console.log(el)
})

Livewire.hook('morph.adding',  ({ el, component }) => {
    //
})

Livewire.hook('morph.added',  ({ el }) => {
    //
})
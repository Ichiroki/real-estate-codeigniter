const hamburger = document.getElementById('hamburger')
const sidebarWrapper = document.getElementById('sidebar-wrapper')

const sidebarOverlay = document.getElementById('sidebar-overlay')

const sidebarClose = document.getElementById('sidebar-close-button')

window.addEventListener('DOMContentLoaded', function() {
    hamburger.addEventListener('click', function() {
        sidebarWrapper.classList.remove('-translate-x-full')
        sidebarWrapper.classList.add('translate-x-0')
        sidebarOverlay.classList.add('opacity-75')
        sidebarOverlay.classList.remove('opacity-0')
        sidebarOverlay.classList.remove('hidden')
    })
    
    sidebarOverlay.addEventListener('click', function() {
        sidebarWrapper.classList.add('-translate-x-full')
        sidebarWrapper.classList.remove('translate-x-0')
        sidebarOverlay.classList.add('opacity-0')
        sidebarOverlay.classList.remove('opacity-75')
        sidebarOverlay.classList.add('hidden')
    })

    sidebarClose.addEventListener('click', function() {
        sidebarWrapper.classList.add('-translate-x-full')
        sidebarWrapper.classList.remove('translate-x-0')
        sidebarOverlay.classList.add('opacity-0')
        sidebarOverlay.classList.remove('opacity-75')
        sidebarOverlay.classList.add('hidden')
    })
})
const listingDropdown = document.getElementById('listing-dropdown')
const listingList = document.getElementById('listing-list')

listingDropdown.addEventListener('click', () => {
    if(!listingList.classList.contains('flex')) {
        listingList.classList.remove('hidden')
        listingList.classList.add('flex')
    } else {
        listingList.classList.add('hidden')
        listingList.classList.remove('flex')
    }
})
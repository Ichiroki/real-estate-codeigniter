const listingDropdown = document.getElementById('listing-dropdown')
const listingList = document.getElementById('listing-list')

const loginDropdown = document.getElementById('login-dropdown')
const loginList = document.getElementById('login-list')

listingDropdown.addEventListener('click', () => {
    if(!listingList.classList.contains('flex')) {
        listingList.classList.remove('hidden')
        listingList.classList.add('flex')
    } else {
        listingList.classList.add('hidden')
        listingList.classList.remove('flex')
    }
})

loginDropdown.addEventListener('click', () => {
    if(!loginList.classList.contains('flex')) {
        loginList.classList.remove('hidden')
        loginList.classList.add('flex')
    } else {
        loginList.classList.add('hidden')
        loginList.classList.remove('flex')
    }
})
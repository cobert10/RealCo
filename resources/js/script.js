const { drop } = require("lodash")
const search_filters = document.querySelectorAll("[data-toggle=dropdown]");

search_filters.forEach(item => {
  item.addEventListener("click", () => {
    const dropMenu = item.nextElementSibling

    if (!dropMenu.classList.contains('hidden')) { 
      dropMenu.classList.toggle('hidden')
      item.classList.toggle('active')
      item.lastElementChild.innerHTML = 'expand_more'
    } else {
      document.querySelectorAll('#dropdown-menu').forEach(item => {
        item.classList.add('hidden')
        item.previousElementSibling.classList.remove('active')
        item.previousElementSibling.lastElementChild.innerHTML = 'expand_more'
      })
      dropMenu.classList.remove('hidden')
      item.classList.add('active')
      item.lastElementChild.innerHTML = 'expand_less'
    }
  });
})



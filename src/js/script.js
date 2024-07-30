const dialog =  document.querySelector('dialog')
const editBtn = document.querySelector('.edit')
const closeDia = document.querySelector('.close-btn')

editBtn.addEventListener('click', () => dialog.showModal() )
closeDia.addEventListener('click', () => dialog.close() )
let sale = document.getElementById("btn-sale").addEventListener('click', function (){
    document.getElementById("add_form-sale").classList.remove("opacity0")
    document.getElementById("add_form-sale").classList.add("opacity1")
    document.getElementById("add_title-sale").classList.remove("opacity0")
    document.getElementById("add_title-sale").classList.add("opacity1")
    document.getElementById("main_table-sale").classList.remove("opacity0")
    document.getElementById("main_table-sale").classList.add("opacity1")
    document.getElementById('btn-sale').classList.add('opacityBtn')
    document.getElementById('btn-up').classList.add('opacityBtn')
    document.getElementById('btn-back').classList.add('opacity1')
})

let up = document.getElementById('btn-up').addEventListener('click', function() {
    document.getElementById('btn-sale').classList.add('opacityBtn')
    document.getElementById('btn-up').classList.add('opacityBtn')
    document.getElementById('btn-back').classList.add('opacity1')
    document.getElementById('add_title-up').classList.remove('opacity0')
    document.getElementById('add_title-up').classList.add('opacity1')
    document.getElementById('add_form-up').classList.remove('opacity0')
    document.getElementById('add_form-up').classList.add('opacity1')
    document.getElementById('main_table-up').classList.remove('opacity0')
    document.getElementById('main_table-up').classList.add('opacity1')
    
})
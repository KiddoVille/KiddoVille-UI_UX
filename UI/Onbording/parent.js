document.addEventListener('DOMContentLoaded', function () {
    // To get Parents image
    const imageicon = document.getElementById('image-icon');
    const image = document.getElementById('image');
    const imagebg = document.getElementById('image-bg');

    imageicon.addEventListener('click', function(){
        image.click();
    })

    image.addEventListener('input',function(event){
        const file= event.target.files[0];
        if(file){   
            redstar5.classList.add('hidden');
            const imageUrl = URL.createObjectURL(file);
            imagebg.style.backgroundImage = `url('${imageUrl}')`;
        }
        else{
            redstar5.classList.remove('hidden');
        }
    })

    //To represent required inputs
    const redstar = document.getElementById('red-star');
    const redstar2 = document.getElementById('red-star2');
    const redstar3 = document.getElementById('red-star3');
    const redstar4 = document.getElementById('red-star4');
    const redstar5 = document.getElementById('red-star5');
    const redstar6 = document.getElementById('red-star6');
    const redstar7 = document.getElementById('red-star7');
    const redstar8 = document.getElementById('red-star8');
    const redstar9 = document.getElementById('red-star9');
    const redstar10 = document.getElementById('red-star10');

    const firstname = document.getElementById('firstname');
    const username = document.getElementById('username');
    const lastname = document.getElementById('lastname');
    const number = document.getElementById('number');
    const address = document.getElementById('address');
    const nid = document.getElementById('nid');
    const email = document.getElementById('email');
    const gender = document.getElementById('gender');
    const language = document.getElementById('language');

    const numberInput = document.querySelector('.number');

    numberInput.addEventListener('input', function (e) {
        this.value = this.value.replace(/\D/g, '');
        if (this.value.length > 3) {
            this.value = this.value.slice(0, 3) + '-' + this.value.slice(3);
        }
        if (this.value.length > 7) {
            this.value = this.value.slice(0, 7) + ' ' + this.value.slice(7);
        }
    });

    email.addEventListener('input',function(){
        if (!email.value) {
            redstar8.classList.remove('hidden');
        } else {
            redstar8.classList.add('hidden');
        }
    })

    address.addEventListener('input',function(){
        if (!address.value) {
            redstar6.classList.remove('hidden');
        } else {
            redstar6.classList.add('hidden');
        }
    })

    nid.addEventListener('input',function(){
        if (!nid.value) {
            redstar7.classList.remove('hidden');
        } else {
            redstar7.classList.add('hidden');
        }
    })

    number.addEventListener('input',function(){
        if (!number.value) {
            redstar4.classList.remove('hidden');
        } else {
            redstar4.classList.add('hidden');
        }
    })

    firstname.addEventListener('input',function(){
        if (!firstname.value) {
            redstar.classList.remove('hidden');
        } else {
            redstar.classList.add('hidden');
        }
    })

    username.addEventListener('input',function(){
        if (!username.value) {
            redstar2.classList.remove('hidden');
        } else {
            redstar2.classList.add('hidden');
        }
    })

    lastname.addEventListener('input',function(){
        if (!lastname.value) {
            redstar3.classList.remove('hidden');
        } else {
            redstar3.classList.add('hidden');
        }
    })

});
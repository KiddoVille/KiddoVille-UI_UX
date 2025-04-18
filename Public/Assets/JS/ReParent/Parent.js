document.addEventListener('DOMContentLoaded', function () {
    const profilerefresh = document.getElementById('profilerefresh');
    const editprofileleft = document.getElementById('editprofileleft');
    const editprofileright = document.getElementById('editprofileright');
    const imageedit = document.getElementById('image-edit');
    const img = document.getElementById('img');
    const addcon = document.getElementById('add-con');
    const add = document.getElementById('add');
    const fileInput = document.getElementById('fileInput');

    add.addEventListener('click', function () {
        document.getElementById('fileInput').click();
    })

    fileInput.addEventListener('input', (event) => {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                img.src = e.target.result;
                addcon.style.display = 'none';
                imageedit.style.display = '';
                img.style.display = '';
            };
            reader.readAsDataURL(file);
        }
    });

    imageedit.addEventListener('click', function () {
        imageedit.style.display = 'none';
        img.style.display = 'none';
        addcon.style.display = 'flex';
    })

    profilerefresh.addEventListener('click', function () {
        editprofileleft.reset();
        editprofileright.reset();
    })

    const redstar = document.getElementById('red-star');
    
});
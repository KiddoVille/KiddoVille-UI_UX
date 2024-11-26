document.addEventListener('DOMContentLoaded', function () {
    // To input childs image
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

    // redstars to represent required inputs
    const redstar = document.getElementById('red-star');
    const redstar2 = document.getElementById('red-star2');
    const redstar3 = document.getElementById('red-star3');
    const redstar4 = document.getElementById('red-star4');
    const redstar5 = document.getElementById('red-star5');

    const firstname = document.getElementById('firstname');
    const nickname = document.getElementById('nickname');
    const lastname = document.getElementById('lastname');
    const relation = document.getElementById('relation');

    firstname.addEventListener('input',function(){
        if (!firstname.value) {
            redstar.classList.remove('hidden');
        } else {
            redstar.classList.add('hidden');
        }
    })

    lastname.addEventListener('input',function(){
        if (!lastname.value) {
            redstar2.classList.remove('hidden');
        } else {
            redstar2.classList.add('hidden');
        }
    })

    nickname.addEventListener('input',function(){
        if (!nickname.value) {
            redstar3.classList.remove('hidden');
        } else {
            redstar3.classList.add('hidden');
        }
    })

    relation.addEventListener('input',function(){
        if (!relation.value) {
            redstar4.classList.remove('hidden');
        } else {
            redstar4.classList.add('hidden');
        }
    })

    //prescription doscuments input 
    // to input image on doctores prescriptions
    const prescriptions = document.getElementById('prescriptions');
    const prescriptionsModal = document.getElementById('prescriptionModal');
    const left = document.getElementById('left');
    const right = document.getElementById('right');
    const prescriptionimg = document.getElementById('prescription-img');
    const backforprescription = document.getElementById('backforprescription');
    const documents = document.getElementById('documents');
    const documnetModal = document.getElementById('documentModal');
    const fileListContainer = document.getElementById('fileListContainer');
    const backfordocument = document.getElementById('backfordocument');
    const imginput = document.getElementById('file-input');
    const imgbtn = document.getElementById('img-btn');
    const Profilecard = document.querySelector('.Profilecard');

    documents.addEventListener('click', function () {
        documnetModal.style.display = 'block';
        Profilecard.style.filter = "blur(10px)";
    })

    backfordocument.addEventListener('click', function () {
        documnetModal.style.display = 'none';
        Profilecard.style.filter = "blur(0px)";
    })

    backforprescription.addEventListener('click', function () {
        prescriptionsModal.style.display = 'none';
        Profilecard.style.filter = "blur(0px)";
    })

    prescriptions.addEventListener('click', function () {
        prescriptionsModal.style.display = 'flex';
        Profilecard.style.filter = "blur(10px)";
    });

    const images = [
        "../../Assets/addprescription.png"
    ];
    let currentIndex = 0;

    prescriptionimg.addEventListener('click', function () {
        if (currentIndex == images.length - 1) {
            imginput.click();
        }
    })

    imginput.addEventListener('change', function () {
        if (imginput.files && imginput.files[0]) {
            const newImageURL = URL.createObjectURL(imginput.files[0]);
            let addimage = images.pop();
            images.push(newImageURL);
            images.push(addimage);
            currentIndex = images.length - 1;
            currentIndex = currentIndex - 1;
            updateImage();
        }
    });

    function updateImage() {
        prescriptionimg.src = images[currentIndex];
    }

    left.addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
    });

    right.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
    });

    updateImage();

    const files = [
    ];

    //to delete and view files
    function renderFiles() {
        fileListContainer.innerHTML = '';

        files.forEach((file, index) => {
            const fileDiv = document.createElement('div');
            fileDiv.className = "file-entry";

            const viewLink = document.createElement('a');
            viewLink.href = file.path;
            viewLink.target = "_blank";
            viewLink.textContent = file.name;
            viewLink.className = "view-link";

            const deleteButton = document.createElement('button');
            deleteButton.textContent = "Delete";
            deleteButton.className = "delete-button";
            deleteButton.onclick = function () {
                deleteFile(index);
            };

            fileDiv.appendChild(viewLink);
            fileDiv.appendChild(deleteButton);
            fileListContainer.appendChild(fileDiv);
        });
    }

    imgbtn.addEventListener('click',function(){
        imginput.click();
    })

    imginput.addEventListener('change',function(){
        const file = imginput.files[0]
        if (file) {
            const fileURL = URL.createObjectURL(file);
            files.push({ name: file.name, path: fileURL });
            renderFiles();
        }
    })

    function deleteFile(index) {
        files.splice(index, 1);
        renderFiles();
    }

    renderFiles();

});
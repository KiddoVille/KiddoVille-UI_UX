document.addEventListener('DOMContentLoaded', function () {
    // refresh and back
    const profilerefresh = document.getElementById('profilerefresh');
    const editprofileleft = document.getElementById('editprofileleft');
    const editprofileright = document.getElementById('editprofileright');

    documents.addEventListener('click', function () {
        documnetModal.style.display = 'block';
        Profilecard.style.filter = "blur(10px)";
    })

    // child prescrpiton 
    const imageedit = document.getElementById('image-edit');
    const img = document.getElementById('img');
    const addcon = document.getElementById('add-con');
    const add = document.getElementById('add');
    const fileInput = document.getElementById('fileInput');
    const days = document.querySelectorAll('.day');
    const prescriptions = document.getElementById('prescriptions');
    const prescriptionsModal = document.getElementById('prescriptionModal');
    const left = document.getElementById('left');
    const right = document.getElementById('right');
    const Profilecard = document.getElementById('Profilecard');
    const prescriptionimg = document.getElementById('prescription-img');
    const backforprescription = document.getElementById('backforprescription');
    const documents = document.getElementById('documents');
    const documnetModal = document.getElementById('documentModal');
    const fileListContainer = document.getElementById('fileListContainer');
    const backfordocument = document.getElementById('backfordocument');
    const imginput = document.getElementById('file-input');
    const imgbtn = document.getElementById('img-btn');


    backfordocument.addEventListener('click', function () {
        documnetModal.style.display = 'none';
        Profilecard.style.filter = "blur(0px)";
    })

    backforprescription.addEventListener('click', function () {
        prescriptionsModal.style.display = 'none';
        Profilecard.style.filter = "blur(0px)";
    })

    prescriptions.addEventListener('click', function () {
        prescriptionsModal.style.display = 'block';
        Profilecard.style.filter = "blur(10px)";
    });

    const images = [
        "../../Assets/prescription1.jpeg",
        "../../Assets/prescription2.jpeg",
        "../../Assets/prescription3.jpeg",
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
        { name: "Report_January.pdf", path: "../../Assets/Report_January.pdf" },
        { name: "Report_February.pdf", path: "../../Assets/Report_February.pdf" },
        { name: "Summary_March.pdf", path: "../../Assets/Summary_March.pdf" }
    ];

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

            imginput.value = '';
        }
    })

    function deleteFile(index) {
        files.splice(index, 1);
        renderFiles();
    }

    renderFiles();
    days.forEach(day => {
        day.addEventListener('click', function () {
            if (day.classList.contains('select')) {
                day.classList.remove('select');
            }
            else {
                day.classList.add('select');
            }
        })
    })

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
            renderFiles();
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


});
document.addEventListener('DOMContentLoaded', function () {
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

    documents.addEventListener('click', function () {
        documnetModal.style.display = 'flex';
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
        "../../Assets/prescription1.jpeg",
        "../../Assets/prescription2.jpeg",
        "../../Assets/prescription3.jpeg"
    ];
    let currentIndex = 0;

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

    files.forEach(file => {
        const fileDiv = document.createElement('div');
        fileDiv.className = "file-entry";

        const viewLink = document.createElement('a');
        viewLink.href = file.path;
        viewLink.target = "_blank";
        viewLink.textContent = file.name;
        viewLink.className = "view-link";

        const downloadButton = document.createElement('button');
        downloadButton.textContent = "Download";
        downloadButton.className = "download-button";
        downloadButton.onclick = function () {
            const link = document.createElement('a');
            link.href = file.path;
            link.download = file.name;
            link.click();
        };

        fileDiv.appendChild(viewLink);
        fileDiv.appendChild(downloadButton);
        fileListContainer.appendChild(fileDiv);
    });

});
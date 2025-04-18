document.addEventListener('DOMContentLoaded', () => {
    // to represent comments and it's buttons
    const commentButton = document.getElementById('commentButton');
    const commentSection = document.getElementById('commentSection');
    const submitCommentButton = document.getElementById('submitCommentButton');
    const cancelCommentButton = document.getElementById('cancelCommentButton');
    const commentInput = document.getElementById('commentInput');
    const thumbsUpButton = document.getElementById('thumbsUpButton');
    const heartButton = document.getElementById('heartButton');

    thumbsUpButton.addEventListener('click', () => {
        thumbsUpButton.classList.toggle('liked');
    });

    heartButton.addEventListener('click', () => {
        heartButton.classList.toggle('added');
    });

    commentButton.addEventListener('click', () => {
        commentSection.style.display = 'block';
    });

    submitCommentButton.addEventListener('click', () => {
        const commentText = commentInput.value.trim();
        if (commentText) {
            const commentDiv = document.createElement('div');
            commentDiv.className = 'comment';
            commentDiv.innerHTML = `
                <img src="../../Assets/face.jpeg" alt="face icon" style="width: 40px; height: 40px; border-radius: 100%; border: 2px solid #1d61c4;">
                <div class="text">${commentText}</div>
            `;
            document.querySelector('.comments').appendChild(commentDiv);
            commentInput.value = '';
            commentSection.style.display = 'none';
        }
    });

    cancelCommentButton.addEventListener('click', () => {
        commentInput.value = '';
        commentSection.style.display = 'none';
    });

});
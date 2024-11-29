let currentStartDate = new Date('2024-08-04');
const dateRangeDays = 2;

function formatDate(date) {
    return date.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: '2-digit' });
}

function changeDate(direction) {
    if(direction === 'prev') {
        currentStartDate.setDate(currentStartDate.getDate() - dateRangeDays - 1 );
    } 
    else if (direction === 'next') {
        currentStartDate.setDate(currentStartDate.getDate() + dateRangeDays + 1);
    }
    const endDate = new Date(currentStartDate);
    endDate.setDate(endDate.getDate() + dateRangeDays);
    document.getElementById('dateRange').textContent = `${formatDate(currentStartDate)} - ${formatDate(endDate)}`;

    for (let i = 0; i <= dateRangeDays; i++) {
        const headerDate = new Date(currentStartDate);
        headerDate.setDate(currentStartDate.getDate() + i);
        document.getElementById(`dateHeader${i + 1}`).textContent = formatDate(headerDate);
    }
    for (let i = 0; i <= dateRangeDays; i++) {
        const snackHeaderDate = new Date(currentStartDate);
        snackHeaderDate.setDate(currentStartDate.getDate() + i);
        document.getElementById(`snackDateHeader${i + 1}`).textContent = formatDate(snackHeaderDate);
    }  
}
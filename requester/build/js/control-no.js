function displayCurrentMonthAndYear() {
    const now = new Date();
    let currentMonth = now.getMonth() + 1;
    const currentYear = now.getFullYear();
    const reqnum = parseInt(document.getElementById('req-no').value, 10);
    currentMonth = currentMonth < 10 ? '0' + currentMonth : currentMonth;
    const newreqnum = isNaN(reqnum) ? 1 : reqnum + 1;
    document.getElementById('req-con-no').value = `${currentYear}-${currentMonth}-${newreqnum}`;
}
window.onload = displayCurrentMonthAndYear;

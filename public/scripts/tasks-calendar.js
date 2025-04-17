document.addEventListener('DOMContentLoaded', function() {
    const currentMonthElement = document.getElementById('currentMonth');
    const calendarDaysContainer = document.getElementById('calendarDays');
    const prevMonthBtn = document.getElementById('prevMonthBtn');
    const nextMonthBtn = document.getElementById('nextMonthBtn');

    let currentDate = new Date();
    // **Simulate tasks on these dates (year, month - 0-indexed, day)**
    const daysWithTasks = [
        new Date(currentDate.getFullYear(), currentDate.getMonth(), 5).toDateString(),
        new Date(currentDate.getFullYear(), currentDate.getMonth(), 10).toDateString(),
        new Date(currentDate.getFullYear(), currentDate.getMonth(), 15).toDateString(),
        new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 2).toDateString(), // Next month
        new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 28).toDateString(), // Previous month
    ];

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();
        const firstDayOfWeek = firstDayOfMonth.getDay();

        const prevLastDay = new Date(year, month, 0).getDate();

        currentMonthElement.textContent = new Intl.DateTimeFormat('en-US', { year: 'numeric', month: 'long' }).format(currentDate);
        calendarDaysContainer.innerHTML = '';

        for (let i = firstDayOfWeek; i > 0; i--) {
            const day = prevLastDay - i + 1;
            const date = new Date(year, month - 1, day).toDateString();
            const dayElement = document.createElement('div');
            dayElement.textContent = day;
            dayElement.classList.add('inactive');
            if (daysWithTasks.includes(date)) {
                dayElement.classList.add('has-task');
            }
            calendarDaysContainer.appendChild(dayElement);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const date = new Date(year, month, i).toDateString();
            const dayElement = document.createElement('div');
            dayElement.textContent = i;
            if (year === new Date().getFullYear() && month === new Date().getMonth() && i === new Date().getDate()) {
                dayElement.classList.add('today');
            }
            if (daysWithTasks.includes(date)) {
                dayElement.classList.add('has-task');
            }
            calendarDaysContainer.appendChild(dayElement);
        }

        const remainingDays = 42 - calendarDaysContainer.children.length;
        for (let i = 1; i <= remainingDays; i++) {
            const day = i;
            const date = new Date(year, month + 1, day).toDateString();
            const dayElement = document.createElement('div');
            dayElement.textContent = day;
            dayElement.classList.add('inactive');
            if (daysWithTasks.includes(date)) {
                dayElement.classList.add('has-task');
            }
            calendarDaysContainer.appendChild(dayElement);
        }
    }

    function navigateMonth(offset) {
        currentDate.setMonth(currentDate.getMonth() + offset);
        renderCalendar();
    }

    prevMonthBtn.addEventListener('click', () => navigateMonth(-1));
    nextMonthBtn.addEventListener('click', () => navigateMonth(1));

    renderCalendar();
});
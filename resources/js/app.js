import axios from 'axios';
import Alpine from 'alpinejs';
const MONTH_NAMES = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];
const MONTH_SHORT_NAMES = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];
const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

window.MONTH_NAMES = MONTH_NAMES;
window.MONTH_SHORT_NAMES = MONTH_SHORT_NAMES;
window.DAYS = DAYS;
window.axios= axios;
window.Alpine = Alpine;
Alpine.start();
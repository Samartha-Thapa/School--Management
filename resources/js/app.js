import './bootstrap';
import './theme-manager';

const menuButton = document.getElementById('menu-toogle');
const mobileMenu = document.getElementById('mobile-menu');
const editClassSubjectBtn = document.getElementById('editClassSubject');
const showSubjects = document.getElementById('showSubjects');
const editSubjects = document.getElementById('editSubjects');

let show = false;
let showSubject = false;

function toogleMenu(){
    show = !show;
    mobileMenu.classList.toggle('hidden', !show);
}

function editClassSubject(){
    showSubject = !showSubject;
    showSubjects.classList.toggle('hidden', showSubject);
    editSubjects.classList.toggle('hidden', !showSubject);
    console.log(showSubject);
}

menuButton.addEventListener('click', toogleMenu);
editClassSubjectBtn.addEventListener('click', editClassSubject)
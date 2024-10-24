//buttons

let homeBtn = document.getElementById('welcome');
let requestBtn = document.getElementById('request');
let reportBtn = document.getElementById('report');
let userMenuIcon = document.getElementById("userMenu");
let notifIcon = document.getElementById('notifIcon')
    


// sections
let homePage = document.querySelector('.welcome');
let requestPage = document.querySelector('.requestDocs');
let reportPage = document.querySelector('.reportIssue');
let profileMenu = document.querySelector(".profileMenu");
let notifPage = document.querySelector('.notification');


// CHAR COUNT
function updateCount() {
    var textarea = document.getElementById('description');
    var charCount = document.getElementById('charCount');
    var maxLength = textarea.maxLength;
    var currentLength = textarea.value.length;
    
    charCount.textContent = maxLength - currentLength;
}

//event Listeners

homeBtn.addEventListener('click', ()=>{
    homePage.style.display = 'flex';
    requestPage.style.display = 'none';
    reportPage.style.display = 'none';
    profileMenu.style.display = 'none';
    notifPage.style.display = 'none';

});

requestBtn.addEventListener('click', ()=>{
    homePage.style.display = 'none';
    requestPage.style.display = 'flex';
    reportPage.style.display = 'none'
    profileMenu.style.display = 'none';
    notifPage.style.display = 'none';

});

reportBtn.addEventListener('click', ()=>{
    reportPage.style.display = 'flex'
     homePage.style.display = 'none';
    requestPage.style.display = 'none';
    profileMenu.style.display = 'none';
    notifPage.style.display = 'none';


});


userMenuIcon.addEventListener('click', ()=>{
    if( profileMenu.style.display !== 'none'){
        profileMenu.style.display = 'none';
    }else{
        profileMenu.style.display = 'flex';
        notifPage.style.display = 'none';
    }
});

notifIcon.addEventListener('click', ()=>{
    if(notifPage.style.display !== 'none'){
        notifPage.style.display = 'none';
    }else{
        notifPage.style.display = 'flex';
        profileMenu.style.display = 'none';
    }
})

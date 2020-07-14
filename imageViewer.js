// Get modal element
var modal = document.getElementById('simpleModal');
// get open modal button
var modalBtns = document.getElementsByClassName('galleryImage');
//get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

//get modal images
var modalImg = document.getElementById('modalImage');

var leftArrow = document.getElementById('leftArrow');
var rightArrow = document.getElementById('rightArrow');

var currentIndex = 0;

document.onkeydown = function(e){
  if (modalImg.style.display != 'none')
  {
    switch (e.keyCode)
    {
      case 37:
        previousImage();
        break;
      case 39:
        nextImage();
        break;
    }
  }
}

//listen for open click
for (let i = 0; i < modalBtns.length; i++) {
  modalBtns[i].addEventListener('click', function(){showImage(i)});
}
//listen for close click
closeBtn.addEventListener('click', closeModal);
//listen for outside click
window.addEventListener('click', outsideClick);
//Listen for click on arrows
leftArrow.addEventListener('click', previousImage);
rightArrow.addEventListener('click', nextImage);


//function to open modal
function openModal(index)
{
  modal.style.display = 'flex';
  if (index >= 0 && index < modalBtns.length)
    modalImg.src = modalBtns[currentIndex].src;
  currentIndex = index;
}

function showImage(index)
{
  currentIndex = index;
  modal.style.display = 'flex';
  if (index >= 0 && index < modalBtns.length)
  {
    modalImg.src = modalBtns[index].src;
  }
}

function nextImage()
{
  currentIndex = clampIndex(currentIndex + 1, modalBtns.length);;
  modalImg.src = modalBtns[currentIndex].src;
}

function previousImage()
{
  currentIndex = clampIndex(currentIndex - 1, modalBtns.length);
  modalImg.src = modalBtns[currentIndex].src;
}

function clampIndex(index, arraySize)
{
  return (index + arraySize) % arraySize;
}

//function to close modal
function closeModal()
{
  modal.style.display = 'none';
}

function outsideClick(e)
{
  if(e.target == modal)
  {
    closeModal();
  }
}

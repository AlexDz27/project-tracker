/** KINDA SOME HEADER BTN LOGIC **/
const headerBtn = document.getElementById('someHeaderBtn')
let headerBtnState = 'off'
headerBtn.onclick = () => {
  headerBtnState = headerBtnState === 'off' ? 'on' : 'off'

  const stateSpan = headerBtn.querySelector('span')
  stateSpan.innerText = headerBtnState
}

/** KINDA SOME HOME BTN LOGIC **/
const homeBtn = document.getElementById('someHomeBtn')
let homeBtnState = 'off'
if (homeBtn) homeBtn.onclick = () => {
  homeBtnState = homeBtnState === 'off' ? 'on' : 'off'

  const stateSpan = homeBtn.querySelector('span')
  stateSpan.innerText = homeBtnState
}

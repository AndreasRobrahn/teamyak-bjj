function toTheId(id) {
  document.getElementById(id).scrollIntoView();
}
function showErrorsModal() {
  $('#errormodal').modal('toggle')
}
function showSidebar(){
  $('#popupmenu').toggle()
  // $('#sidemenuwrapper').hide()
}
function hideSidebar(){
  $('#popupmenu').toggle()
  // $('#sidemenuwrapper').hide()
}

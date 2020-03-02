$(document).ready(function() {
  Customizer_Header_Options_Visibility();
});

function Customizer_Header_Options_Visibility() {
  var showCallToActionButton = $("#_customize-input-header_section_settings_3");

  function changeVisibility(bool) {
    $("#customize-control-header_section_settings_4")[bool ? "show" : "hide"]();
    $("#customize-control-header_section_settings_5")[bool ? "show" : "hide"]();
    $("#customize-control-header_section_settings_6")[bool ? "show" : "hide"]();
  }
  changeVisibility(showCallToActionButton.is(":checked"));
  showCallToActionButton.change(function(e) {
    changeVisibility(e.target.checked);
  });
}

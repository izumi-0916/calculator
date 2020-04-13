window.addEventListener("load", function() {
  let tabs = $(".Add");
  tabsAry = Array.prototype.slice.call(tabs);
  function tabSwitch() {
    $(".active").removeClass("active");
    this.classList.add("active");
  }
  tabs.click(tabSwitch);    
});
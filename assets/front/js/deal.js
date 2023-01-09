var TabsWidget = {
  init: function() {
    this.baseElement = document.querySelector("[data-tabs]")
    
    if(this.baseElement)
      this.bindUIActions();
  },

  bindUIActions: function() {
    var toggles = this.baseElement.querySelectorAll("[data-toggle]")
    
    toggles.forEach(function (tab) {
      tab.addEventListener("click", TabsWidget.clickTab);
    });
  },

  clickTab: function(e) {
    var el = e.target
      , targetContentName = el.getAttribute("href")
      , targetElement = document.querySelector(targetContentName)
      , panes
      , tabs

    //remove active class from all tabs.
    panes = $(".tab-pane")
    panes.each(function() {
      var pane = $(this)
      if(pane.attr("id") === targetElement.getAttribute("id"))
        pane.addClass("active")
      else
        pane.removeClass("active")
    })

    //set active on parent element
    tabs = TabsWidget.baseElement.querySelectorAll("[data-toggle]")
    tabs.forEach(function(tab) {
      if(tab.getAttribute("href") === ("#" +targetElement.getAttribute("id")))
        tab.parentNode.classList.add("active")
      else
        tab.parentNode.classList.remove("active")
    })

    e.preventDefault();
    e.stopPropagation();
  }

};


var CollapsableHeader = {
  init: function() {
    this.bindUIActions();
  },

  bindUIActions: function() {
    var toggles = $("[data-collapsable]")
    
    toggles.each(function () {
      $(this).click(CollapsableHeader.handleClickTab(this));
    });
  },

  handleClickTab: function(tab){
    return function(e) {
      CollapsableHeader.toggleClass(tab, tab.getAttribute("data-collapsable"))
    }
  },

  toggleClass: function(el, className) {
    if (el.classList) {
      el.classList.toggle(className);
    } else {
      var classes = el.className.split(' ');
      var existingIndex = classes.indexOf(className);
    
      if (existingIndex >= 0)
        classes.splice(existingIndex, 1);
      else
        classes.push(className);
    
      el.className = classes.join(' ');
    }
  }

};

var DealQuestions = {
  init: function() {
    this.bindUIActions();
  },

  bindUIActions: function() {
    $('.carousel').carousel({
      interval: false
    })

    $(".qualify-action").on("click", function(){
        $(".carousel").carousel('next')
    })

    $(".qualify-continue").on("click", function(){
      $("#questions__container").addClass("collapsed");
      $("#registration__container").removeClass("disabled");
    })
  }
};

var DealsPaginator = {
  dealMeta: {},

  loadMoreDeals: function(tag, total){

    if(!DealsPaginator.dealMeta[tag])
        DealsPaginator.dealMeta[tag] = 1

    DealsPaginator.dealMeta[tag] = DealsPaginator.dealMeta[tag] + 1

    $.get("/deal/tag/"+tag+"?page="+DealsPaginator.dealMeta[tag])
        .then(function(result){
          debugger
            $("#tab_"+tag).find(".col-lg-4:last").after(result)
        })
    
    if(DealsPaginator.dealMeta[tag] >= total){
        $("#tab_"+tag).find(".has-more").hide()
        return
    }
  }
};

document.addEventListener("DOMContentLoaded", function(){
  TabsWidget.init();
  CollapsableHeader.init();
  DealQuestions.init();
})

// (function() {
  
// })();


// $(document).ready(function(){

//     $(".deal-questions button").on("click", function(){
//         $(".carousel").carousel('next')
//     })
    
//     $(".deal-message button").on("click", function(){
//         $(".carousel").carousel('next')
//         $(".deal-content-survey").addClass("deal-content-form")
//         $(".category-title").addClass("mobile-hide")
//         $(".hero").addClass("mobile-hide")
//     })

//     $('.carousel').carousel({
//         interval: false
//     })

//     var dealMeta = {}

    window.loadMoreDeals = function(tag, total){

        if(!dealMeta[tag])
            dealMeta[tag] = 1

        dealMeta[tag] = dealMeta[tag] + 1

        $.get("/"+tag+"?page="+dealMeta[tag])
            .then(function(result){
                $("#tab_"+tag).find(".col-1-3:last").after(result)
            })
        
        if(dealMeta[tag] >= total){
            $("#tab_"+tag).find(".has-more-button").hide()
            return
        }
    }

//     $('.deal-message').find('button').on('click', function(){
//         $("html, body").animate({ scrollTop: 0 }, 200);
//     })

//     $('.deal-questions').find('button').on('click', function(){
//         $("html, body").animate({ scrollTop: 0 }, 200);
//     })


//     $('.countdown').each(function(){

//         var element = this

//         var timer = setInterval(function(){
//             var couponId = $(element).attr("id")
//             var dateString = $("#"+couponId).attr("expiration")
//             dateString = dateString.split("/")
//             dateString = dateString[2]+"-"+dateString[0]+"-"+dateString[1]

//             var date = new Date(dateString).getTime()
//             var now = new Date().getTime()
//             var distance = date - now;

//             var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//             var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//             var minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
//             minutes = minutes.length < 2 ? "0" + minutes : minutes
//             var seconds = String(Math.floor((distance % (1000 * 60)) / 1000));
//             seconds = seconds.length < 2 ? "0" + seconds : seconds
    
//             $("#"+couponId+" span").text(days + " days " + hours + ":"+ minutes + ":" + seconds)
    
//             if (distance < 0) {
//                 clearInterval(timer);
//                 $("#"+couponId+" span").text("EXPIRED");
//             }
//         }, 1000) 
//     })

//     $(".nav-pills li a").on("click", function(){
//         $(".nav-pills li").removeClass("active")
//         $(".nav-pills li a").removeClass("active")
//         $(this).addClass("active")
//         $(this).parent().addClass("active")
//         $("#my-tab-content .tab-pane").removeClass("active")
//         $($(this).attr("href")).addClass("active")
//     })
// })


$(function() {
  $(".dropdown-menu.show").css("position", "fixed !important");
    let burgerVal = true;
    let e = $("li.burger");
    burger = $("#burger"), navOpenId = $("#navOpen"), backHeader = $("#backHeader"), navBack = $(".navBack"), collectionButton = $("#collectionButton"), categoryButton = $("#categoryButton"), collButton = $(".collButton"), collectionsOpen = $("#collectionsOpen"), categoryOpen = $("#categoryOpen"), body = $("body"), navOpenClass = $(".navOpen"), addToWish = $(".addToWish"), footerButton = $(".footerButton"), collValid = !1;
    const t = document.getElementById("loungewearButton"),
        n = document.getElementById("jewerlyButton"),
        s = $("header"),
        o = $("footer"),
        i = document.getElementById("cover");
    let c = $("#filterButton");

    $(document).on("scroll", function() {
      // console.log($(window).scrollTop())
      if($(window).scrollTop() > 20) {
        $("header").addClass("top");
      } else {
        $("header").removeClass("top");
      }
    })
    filterCat = $(".filterCat"), filterContainer = $(".filterContainer"), $("main").hasClass("oneProductContent") && (s.addClass("top"), collValid = !0), collValid || (i.addEventListener("touchstart", function(e) {
        touchstartY = e.changedTouches[0].screenY
    }, !1)), e.on("click", function() {
        $(this).children().hasClass("burgerOpen") ? (burgerVal = true, $(this).children("div").removeClass("burgerOpen"), navOpenClass.css("transform", "translateX(-110vw)"), backHeader.removeClass("show"), body.css("overflow", "auto")) : ($(this).children("div").addClass("burgerOpen"), $("header").removeClass("top"), burgerVal = false, navOpenId.css("transform", "translateX(0px)"), backHeader.addClass("show"), body.css("overflow", "hidden"))
    }), t.addEventListener("click", function() {
        s.removeClass("jewerly"), s.addClass("loungewear"), o.removeClass("footerJewerly"), o.addClass("footerLoungewear")
    }), n.addEventListener("click", function() {
        s.addClass("jewerly"), s.removeClass("loungewear"), o.addClass("footerJewerly"), o.removeClass("footerLoungewear")
    }), collectionButton.click(() => {
        collectionsOpen.css("transform", "translateX(0px)")
    }), categoryButton.click(() => {
        categoryOpen.toggleClass("showThis");
        categoryButton.toggleClass("open");
    }), navBack.children("span").click(function() {
        $(this).parent().parent().css("transform", "translateX(-110vw)")
    }), collButton.children("span").click(function() {
        $(this).next().css("transform", "translateX(0px)"), $(this).next().children(".navBack").children().text($(this).text())
    }), backHeader.click(() => {
         navOpenClass.css("transform", "translateX(-110vw)"),backHeader.removeClass("show"), burger.removeClass("burgerOpen"), body.css("overflow", "auto")
    }), footerButton.click(function() {
        $(this).parent().children("li").toggleClass("show")
    }), $("main").hasClass(".categoryContent") || (c.click(e => {
        ! function(e) {
            $(e.target).hasClass("active") ? ($(e.target).next().removeClass("show"), $(e.target).removeClass("active")) : ($(e.target).next().addClass("show"), $(e.target).addClass("active"))
        }(e)
    }), filterCat.on("click", ".filterButton", function() {
        $(this).hasClass("active") ? ($(this).removeClass("active"), $(this).next().removeClass("show")) : ($(this).addClass("active"), $(this).next().addClass("show"))
    }), filterContainer.on("click", "#closeFilter", function() {
        document.getElementById("filterInner").classList.remove("show"), document.getElementById("filterButton").classList.remove("active")
    })), $(".addToWish").click(function() {
        $(this).toggleClass("addedToWish")
    }), $(".addToWishProduct").click(function() {
        $(this).toggleClass("addedToWish")
    }), $("._descriptionInner").children(".title").click(function() {
        $(this).toggleClass("minus"), $(this).next().toggleClass("show")
    }), $("select.qty").on("change", function() {
        $(this).parents("._description").find(".qtyBox").text(this.value)
    }), $(".paymentMethod").click(function() {
        $(".paymentMethod").removeClass("selected"), $(this).addClass("selected")
    }), $("#pageSelected").click(function() {
        $(this).toggleClass("show"), $(this).next().toggleClass("open")
    })
}), $(function() {
    let e = $(".sliderCollectionHome");
    $(document).ready(function() {
        let t = .01 * window.innerHeight;
        document.documentElement.style.setProperty("--vh", `${t}px`), $(".bannerSlider").slick({
            dots: !1,
            infinite: !0,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: !0
        }), $(e).slick({
            dots: !1,
            infinite: !0,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: !0,
            arrows: 1
        }), $(".additional").slick({
            dots: !1,
            infinite: !0,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: !0
        })
    })
}), setTimeout(function() {
    $(function() {
        let e = $(".sliderOneProduct");
        if (e.slick({
                infinite: !1,
                speed: 800,
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: !0,
                verticalSwiping: !0,
                arrows: !1,
                dots: !0,
                rows: 0,
                touchMove: !1
            }), e.find(".slick-dots").css("top", `calc(40% - ${15*e.find(".slick-dots").children("li").length/2}px)`), $("main").hasClass("oneProductContent")) {
            $(".fuuckSlider").slick({
                dots: !1,
                infinite: 1,
                speed: 800,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !1,
                rows: 0,
                touchMove: !1
            });
            var t, n, s, o = window.innerHeight - 195,
                i = document.querySelectorAll("._description"),
                c = document.querySelectorAll(".innerContainer"),
                l = !0,
                a = $(".sliderOneProduct").find(".sld"),
                r = $(".lookItem"),
                d = !1,
                u = 0;
            for (let e = 0; e < $(".sliderLook").length; e++) $(".sliderLook").eq(e).slick({
                dots: !1,
                infinite: !0,
                speed: 800,
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: !0,
                swipe: !0
            });
            for (let e = 0; e < i.length; e++) i[e].classList.add(`fuuck${e}`), c[e].classList.add(`bag${e}`), $(i[e]).on("touchstart", function(t) {
                "touchstart" === t.type ? (n = t.touches[0].clientY - u, s = t.touches[0].clientY) : n = t.clientY - u, d = !$(`.fuuck${e}`).hasClass("innerActivated")
            }), $(i[e]).on("touchend", function(n) {
                t < -50 ? ($(".fuuckSlider").slick("slickSetOption", "swipe", !1), t = -o, $(`.fuuck${e}`).addClass("innerActivated"), $(".oneProductContent").addClass("noArrows"), f(t, $(`.fuuck${e}`))) : t > -150 && ($(".fuuckSlider").slick("slickSetOption", "swipe", !0), u = 0, f(t = 0, $(`.fuuck${e}`)), h()), d = !1
            }), $(i[e]).on("touchmove", function(o) {
                0 == $(`.bag${e}`).scrollTop() && 1 == l && 0 !== $(o.target).parents("._description.innerActivated").length && (d = o.touches[0].clientY > s), d && (o.preventDefault(), "touchmove" === o.type ? o.touches[0].clientY - n > -500 && o.touches[0].clientY - n < 0 && (t = o.touches[0].clientY - n) : h(), $(".sliderOneProduct").slick("slickSetOption", "swipe", !0), u = t, f(t, $(`.fuuck${e}`)))
            });

            function h() {
                $("._description").removeClass("innerActivated"), $(".fuuckSlider").slick("slickSetOption", "swipe", !0), t = 0, u = 0, $(".oneProductContent").removeClass("noArrows"), f(t, $("._description")), $(".innerContainer").scrollTop(0)
            }

            function f(e, t) {
                t.css("transform", `translateY(${e}px)`)
            }
            $(a).on("touchstart", function(e) {
                "touchstart" === e.type ? (n = e.touches[0].clientY - u, s = e.touches[0].clientY, d = !0) : n = e.clientY - u
            }), $(a).on("touchmove", function(e) {
                console.log($(this).attr("data-slick-index") == $(this).parent().children("div:last-child").attr("data-slick-index")), e.touches[0].clientY < s - 30 && $(this).attr("data-slick-index") == $(this).parent().children("div:last-child").attr("data-slick-index") ? ($(".sliderOneProduct").slick("slickSetOption", "swipe", !1), t = e.touches[0].clientY - n, d = !0, u = t) : ($(".sliderOneProduct").slick("slickSetOption", "swipe", !0), d = !1)
            }), $(a).on("touchend", function(e) {
                d && (t = -o, $(this).parents(".oneProduct").find("._description").addClass("innerActivated"), $(".oneProductContent").addClass("noArrows"), f(t, $(this).parents(".oneProduct").find("._description"))), d = !1
            }), $(r).on("touchstart", function(e) {
                l = !1
            }), $(r).on("touchend", function(e) {
                l = !0
            }), $(".closeInner").click(() => h()), $("._sizeCheck").children("input").change(e => {
                $(".sizeContainerProduct").css("bottom", "-100%"), $(e.target).parents(".productInner.oneProduct").find(".sizeButton").addClass("_sizeChecked")
            }), $(document).on("click", "#sizeValidation", function(e) {
                var n = $(e.target).parents(".buttons").next().find(".item");
                for (let e = 0; e <= n.length; e++)
                    if (0 == $(n[e]).find("input:checked").length) {
                        t = -o, $(description).addClass("innerActivated"), f(t, description), $(n[e]).find(".chooseSize").addClass("heartBeat");
                        break
                    }
            })
        }
    })
}, 500), window.addEventListener("resize", () => {
    let e = .01 * window.innerHeight;
    document.documentElement.style.setProperty("--vh", `${e}px`)
});

$(function() {
    setTimeout(function() {
        $('#sniper').fadeOut()
    }, 500);
});

if ($('main').hasClass('oneProductContent')) {
    $("#wish").children("span").css("top", "-13px");
    $("#cart").children("span").css("top", "-13px");
}

$(function() {
  $(document).ready(function() {
    $(document).on("click", ".selSize", function(e) {
      let sizeSelected = $(e.target).parents(".selSize").children("input").val();
      $(".dropdown-menu").removeClass("show")
      $(e.target).parents(".sizeContainer").children("button").text(sizeSelected)
      $(e.target).parents(".sizeContainer").children("button").css("text-transform", "uppercase")
    })

    const selectSize = (e) => {
      const parent = e.target.closest('div');
      const mass = parent.querySelectorAll('span');

      // document.getElementById('sizeError').classList.remove('show');

      for (let i of mass) {
        i.classList.remove('selected')
      }

      e.target.classList.add('selected');
    }

    $('.sizeContainer').on('click', "span", selectSize);
  });
});

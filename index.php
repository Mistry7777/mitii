<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="origin-trial"
        content="3NNj0GXVktLOmVKwWUDendk4Vq2qgMVDBDX+Sni48ATJl9JBj+zF+9W2HGB3pvt6qowOihTbQgTeBm9SKbdTwYAAABfeyJvcmlnaW4iOiJodHRwczovL3JlY2FwdGNoYS5uZXQ6NDQzIiwiZmVhdHVyZSI6IlRwY2QiLCJleHBpcnkiOjE3MzUzNDM5OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
    <meta http-equiv="origin-trial"
        content="A7uxtj3+hJmOcZFooFT0Ps276PuOqGnM1jfoPbFvxWp73VC60LnYGzayHVvcFeEiF0qrwy7fQAL+gGVXU+f9IQcAAACTeyJvcmlnaW4iOiJodHRwczovL3JlY2FwdGNoYS5uZXQ6NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZzIiLCJleHBpcnkiOjE3NDIzNDIzOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <link rel="icon" href="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="MyPaymentVault">
    <link rel="apple-touch-icon" href="">
    <link rel="manifest" href="">
    <title>MyPaymentVault</title>
    <script type="text/javascript" async="" charset="utf-8" src="assets/recaptcha__en.js.download"
        crossorigin="anonymous" integrity="sha384-gaZtYaI7oJHEOo1YO6VuoCE4iZ5fMV9mYHP0BHf+r2ttABnpWWCIkgI6ItNW4ZdO">
    </script>
    <script defer="defer" src="assets/bundle.js.download"></script>
    <link href="assets/styles.css" rel="stylesheet">
    <style type="text/css">
    body.swal2-shown {
        overflow-y: hidden;
        position: fixed
    }

    .swal2-container,
    body.swal2-iosfix {
        position: fixed;
        left: 0;
        right: 0
    }

    .swal2-container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        top: 0;
        bottom: 0;
        padding: 10px;
        background-color: transparent;
        z-index: 1060
    }

    .swal2-container.swal2-fade {
        -webkit-transition: background-color .1s;
        transition: background-color .1s
    }

    .swal2-container.swal2-shown {
        background-color: rgba(0, 0, 0, .4)
    }

    .swal2-modal {
        background-color: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        border-radius: 5px;
        box-sizing: border-box;
        text-align: center;
        margin: auto;
        overflow-x: auto;
        overflow-y: auto;
        display: none;
        position: relative;
        max-width: 100%
    }

    .swal2-modal:focus {
        outline: 0
    }

    .swal2-modal.swal2-loading {
        overflow-y: hidden
    }

    .swal2-modal .swal2-title {
        color: #595959;
        font-size: 30px;
        text-align: center;
        font-weight: 600;
        text-transform: none;
        position: relative;
        margin: 0 0 .4em;
        padding: 0;
        display: block;
        word-wrap: break-word
    }

    .swal2-modal .swal2-buttonswrapper {
        margin-top: 15px
    }

    .swal2-modal .swal2-buttonswrapper:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4;
        cursor: no-drop
    }

    .swal2-modal .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-confirm {
        box-sizing: border-box;
        border: 4px solid transparent;
        border-color: transparent;
        width: 40px;
        height: 40px;
        padding: 0;
        margin: 7.5px;
        vertical-align: top;
        background-color: transparent !important;
        color: transparent;
        cursor: default;
        border-radius: 100%;
        -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
        animation: rotate-loading 1.5s linear 0s infinite normal;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .swal2-modal .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-cancel {
        margin-left: 30px;
        margin-right: 30px
    }

    .swal2-modal .swal2-buttonswrapper.swal2-loading:not(.swal2-styled).swal2-confirm:after {
        display: inline-block;
        content: "";
        margin-left: 5px 0 15px;
        vertical-align: -1px;
        height: 15px;
        width: 15px;
        border: 3px solid #999;
        box-shadow: 1px 1px 1px #fff;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
        animation: rotate-loading 1.5s linear 0s infinite normal
    }

    .swal2-modal .swal2-styled {
        border: 0;
        border-radius: 3px;
        box-shadow: none;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        font-weight: 500;
        margin: 15px 5px 0;
        padding: 10px 32px
    }

    .swal2-modal .swal2-image {
        margin: 20px auto;
        max-width: 100%
    }

    .swal2-modal .swal2-close {
        background: 0 0;
        border: 0;
        margin: 0;
        padding: 0;
        width: 38px;
        height: 40px;
        font-size: 36px;
        line-height: 40px;
        font-family: serif;
        position: absolute;
        top: 5px;
        right: 8px;
        cursor: pointer;
        color: #ccc;
        -webkit-transition: color .1s ease;
        transition: color .1s ease
    }

    .swal2-modal .swal2-close:hover {
        color: #d55
    }

    .swal2-modal>.swal2-checkbox,
    .swal2-modal>.swal2-file,
    .swal2-modal>.swal2-input,
    .swal2-modal>.swal2-radio,
    .swal2-modal>.swal2-select,
    .swal2-modal>.swal2-textarea {
        display: none
    }

    .swal2-modal .swal2-content {
        font-size: 18px;
        text-align: center;
        font-weight: 300;
        position: relative;
        float: none;
        margin: 0;
        padding: 0;
        line-height: normal;
        color: #545454;
        word-wrap: break-word
    }

    .swal2-modal .swal2-checkbox,
    .swal2-modal .swal2-file,
    .swal2-modal .swal2-input,
    .swal2-modal .swal2-radio,
    .swal2-modal .swal2-select,
    .swal2-modal .swal2-textarea {
        margin: 20px auto
    }

    .swal2-modal .swal2-file,
    .swal2-modal .swal2-input,
    .swal2-modal .swal2-textarea {
        width: 100%;
        box-sizing: border-box;
        font-size: 18px;
        border-radius: 3px;
        border: 1px solid #d9d9d9;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
        -webkit-transition: border-color box-shadow .3s;
        transition: border-color box-shadow .3s
    }

    .swal2-modal .swal2-file.swal2-inputerror,
    .swal2-modal .swal2-input.swal2-inputerror,
    .swal2-modal .swal2-textarea.swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important
    }

    .swal2-modal .swal2-file:focus,
    .swal2-modal .swal2-input:focus,
    .swal2-modal .swal2-textarea:focus {
        outline: 0;
        border: 1px solid #b4dbed;
        box-shadow: 0 0 3px #c4e6f5
    }

    .swal2-modal .swal2-file:focus::-webkit-input-placeholder,
    .swal2-modal .swal2-input:focus::-webkit-input-placeholder,
    .swal2-modal .swal2-textarea:focus::-webkit-input-placeholder {
        -webkit-transition: opacity .3s ease .03s;
        transition: opacity .3s ease .03s;
        opacity: .8
    }

    .swal2-modal .swal2-file:focus:-ms-input-placeholder,
    .swal2-modal .swal2-input:focus:-ms-input-placeholder,
    .swal2-modal .swal2-textarea:focus:-ms-input-placeholder {
        -webkit-transition: opacity .3s ease .03s;
        transition: opacity .3s ease .03s;
        opacity: .8
    }

    .swal2-modal .swal2-file:focus::placeholder,
    .swal2-modal .swal2-input:focus::placeholder,
    .swal2-modal .swal2-textarea:focus::placeholder {
        -webkit-transition: opacity .3s ease .03s;
        transition: opacity .3s ease .03s;
        opacity: .8
    }

    .swal2-modal .swal2-file::-webkit-input-placeholder,
    .swal2-modal .swal2-input::-webkit-input-placeholder,
    .swal2-modal .swal2-textarea::-webkit-input-placeholder {
        color: #e6e6e6
    }

    .swal2-modal .swal2-file:-ms-input-placeholder,
    .swal2-modal .swal2-input:-ms-input-placeholder,
    .swal2-modal .swal2-textarea:-ms-input-placeholder {
        color: #e6e6e6
    }

    .swal2-modal .swal2-file::placeholder,
    .swal2-modal .swal2-input::placeholder,
    .swal2-modal .swal2-textarea::placeholder {
        color: #e6e6e6
    }

    .swal2-modal .swal2-range input {
        float: left;
        width: 80%
    }

    .swal2-modal .swal2-range output {
        float: right;
        width: 20%;
        font-size: 20px;
        font-weight: 600;
        text-align: center
    }

    .swal2-modal .swal2-range input,
    .swal2-modal .swal2-range output {
        height: 43px;
        line-height: 43px;
        vertical-align: middle;
        margin: 20px auto;
        padding: 0
    }

    .swal2-modal .swal2-input {
        height: 43px;
        padding: 0 12px
    }

    .swal2-modal .swal2-input[type=number] {
        max-width: 150px
    }

    .swal2-modal .swal2-file {
        font-size: 20px
    }

    .swal2-modal .swal2-textarea {
        height: 108px;
        padding: 12px
    }

    .swal2-modal .swal2-select {
        color: #545454;
        font-size: inherit;
        padding: 5px 10px;
        min-width: 40%;
        max-width: 100%
    }

    .swal2-modal .swal2-radio {
        border: 0
    }

    .swal2-modal .swal2-radio label:not(:first-child) {
        margin-left: 20px
    }

    .swal2-modal .swal2-radio input,
    .swal2-modal .swal2-radio span {
        vertical-align: middle
    }

    .swal2-modal .swal2-radio input {
        margin: 0 3px 0 0
    }

    .swal2-modal .swal2-checkbox {
        color: #545454
    }

    .swal2-modal .swal2-checkbox input,
    .swal2-modal .swal2-checkbox span {
        vertical-align: middle
    }

    .swal2-modal .swal2-validationerror {
        background-color: #f0f0f0;
        margin: 0 -20px;
        overflow: hidden;
        padding: 10px;
        color: gray;
        font-size: 16px;
        font-weight: 300;
        display: none
    }

    .swal2-modal .swal2-validationerror:before {
        content: "!";
        display: inline-block;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #ea7d7d;
        color: #fff;
        line-height: 24px;
        text-align: center;
        margin-right: 10px
    }

    @supports (-ms-accelerator:true) {
        .swal2-range input {
            width: 100% !important
        }

        .swal2-range output {
            display: none
        }
    }

    @media (-ms-high-contrast:active),
    (-ms-high-contrast:none) {
        .swal2-range input {
            width: 100% !important
        }

        .swal2-range output {
            display: none
        }
    }

    .swal2-icon {
        width: 80px;
        height: 80px;
        border: 4px solid transparent;
        border-radius: 50%;
        margin: 20px auto 30px;
        padding: 0;
        position: relative;
        box-sizing: content-box;
        cursor: default;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .swal2-icon.swal2-error {
        border-color: #f27474
    }

    .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        display: block
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #f27474;
        display: block;
        top: 37px;
        border-radius: 2px
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 17px
    }

    .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 16px
    }

    .swal2-icon.swal2-warning {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        color: #f8bb86;
        border-color: #facea8
    }

    .swal2-icon.swal2-info,
    .swal2-icon.swal2-warning {
        font-size: 60px;
        line-height: 80px;
        text-align: center
    }

    .swal2-icon.swal2-info {
        font-family: Open Sans, sans-serif;
        color: #3fc3ee;
        border-color: #9de0f6
    }

    .swal2-icon.swal2-question {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        color: #87adbd;
        border-color: #c9dae1;
        font-size: 60px;
        line-height: 80px;
        text-align: center
    }

    .swal2-icon.swal2-success {
        border-color: #a5dc86
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        transform-origin: 60px 60px
    }

    .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 60px;
        transform-origin: 0 60px
    }

    .swal2-icon.swal2-success .swal2-success-ring {
        width: 80px;
        height: 80px;
        border: 4px solid hsla(98, 55%, 69%, .2);
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2
    }

    .swal2-icon.swal2-success .swal2-success-fix {
        width: 7px;
        height: 90px;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line] {
        height: 5px;
        background-color: #a5dc86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
        width: 25px;
        left: 14px;
        top: 46px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
        width: 47px;
        right: 8px;
        top: 38px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .swal2-progresssteps {
        font-weight: 600;
        margin: 0 0 20px;
        padding: 0
    }

    .swal2-progresssteps li {
        display: inline-block;
        position: relative
    }

    .swal2-progresssteps .swal2-progresscircle {
        background: #3085d6;
        border-radius: 2em;
        color: #fff;
        height: 2em;
        line-height: 2em;
        text-align: center;
        width: 2em;
        z-index: 20
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
        margin-left: 0
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
        margin-right: 0
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
        background: #3085d6
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle,
    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
        background: #add8e6
    }

    .swal2-progresssteps .swal2-progressline {
        background: #3085d6;
        height: .4em;
        margin: 0 -1px;
        z-index: 10
    }

    [class^=swal2] {
        -webkit-tap-highlight-color: transparent
    }

    @-webkit-keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(.7);
            transform: scale(.7)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(.7);
            transform: scale(.7)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @-webkit-keyframes hideSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1
        }

        to {
            -webkit-transform: scale(.5);
            transform: scale(.5);
            opacity: 0
        }
    }

    @keyframes hideSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1
        }

        to {
            -webkit-transform: scale(.5);
            transform: scale(.5);
            opacity: 0
        }
    }

    .swal2-show {
        -webkit-animation: showSweetAlert .3s;
        animation: showSweetAlert .3s
    }

    .swal2-show.swal2-noanimation {
        -webkit-animation: none;
        animation: none
    }

    .swal2-hide {
        -webkit-animation: hideSweetAlert .15s forwards;
        animation: hideSweetAlert .15s forwards
    }

    .swal2-hide.swal2-noanimation {
        -webkit-animation: none;
        animation: none
    }

    @-webkit-keyframes animate-success-tip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @keyframes animate-success-tip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @-webkit-keyframes animate-success-long {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    @keyframes animate-success-long {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    @-webkit-keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    .swal2-animate-success-line-tip {
        -webkit-animation: animate-success-tip .75s;
        animation: animate-success-tip .75s
    }

    .swal2-animate-success-line-long {
        -webkit-animation: animate-success-long .75s;
        animation: animate-success-long .75s
    }

    .swal2-success.swal2-animate-success-icon .swal2-success-circular-line-right {
        -webkit-animation: rotatePlaceholder 4.25s ease-in;
        animation: rotatePlaceholder 4.25s ease-in
    }

    @-webkit-keyframes animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        ;

        to {
            -webkit-transform: rotateX(0);
            transform: rotateX(0);
            opacity: 1
        }
    }

    @keyframes animate-error-icon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0);
            transform: rotateX(0);
            opacity: 1
        }
    }

    .swal2-animate-error-icon {
        -webkit-animation: animate-error-icon .5s;
        animation: animate-error-icon .5s
    }

    @-webkit-keyframes animate-x-mark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes animate-x-mark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    .swal2-animate-x-mark {
        -webkit-animation: animate-x-mark .5s;
        animation: animate-x-mark .5s
    }

    @-webkit-keyframes rotate-loading {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    @keyframes rotate-loading {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    .s2p-warn-frame {
        width: 95%;
        height: 520px
    }

    @media screen and (orientation:landscape) {
        .s2p-warn-frame {
            height: 320px
        }
    }

    #swal2-content iframe {
        border: none
    }

    .spay-customize-modal-QR {
        height: 95vh;
        padding: 10px !important;
        width: 960px !important
    }

    .spay-customize-modal-QR #swal2-title {
        display: none
    }

    .spay-customize-modal-QR #swal2-content>iframe {
        height: calc(95vh - 30px);
        width: 960px
    }

    .swal2-confirm {
        border-style: none;
        background-color: #fff
    }

    .spay-mobile-dialog {
        padding: 0 !important;
        text-align: center;
        min-height: 80px;
        border-radius: 4px;
        background-color: #fff !important;
        box-shadow: inset 0 1px 2px 0 #fff, inset 0 0 0 1px rgba(0, 0, 0, .11), 0 4px 8px 2px rgba(0, 0, 0, .12)
    }

    .spay-mobile-dialog .swal2-buttonswrapper {
        height: 0 !important;
        width: auto;
        margin-bottom: 0;
        margin-top: 0
    }

    .spay-mobile-dialog .swal2-confirm {
        height: 12px;
        width: auto;
        color: #4162da;
        font-family: SamsungOne-800C;
        font-size: 12px;
        letter-spacing: .5px;
        line-height: 12px;
        text-align: center;
        text-shadow: 0 2px 14px 0 rgba(0, 0, 0, .5) !important;
        padding: 0 !important;
        margin-top: 24px;
        margin-bottom: 16px
    }

    .spay-mobile-dialog .swal2-title {
        height: 11px;
        width: auto;
        color: #252525;
        font-family: SamsungSharpSans-Bold;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .75px;
        line-height: 11px;
        text-align: center !important;
        margin-bottom: 0;
        margin-top: 16px;
        display: inline-block;
        text-shadow: 0 2px 14px 0 rgba(0, 0, 0, .5) !important
    }

    @font-face {
        font-family: SamsungSharpSans-Bold;
        src: url("https://s2p.mpay.samsung.com/fonts/SamsungSharpSans/SamsungSharpSans-Bold.ttf")
    }

    @font-face {
        font-family: SamsungOne-600C;
        src: url("https://s2p.mpay.samsung.com/fonts/SamsungOne/SamsungOne-600C_v1.0.ttf")
    }

    @font-face {
        font-family: SamsungOne-800C;
        src: url("https://s2p.mpay.samsung.com/fonts/SamsungOne/SamsungOne-800C_v1.0.ttf")
    }
    </style>
</head>
<style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }


        
    </style>
<body class="" style="">
    <div id="root">
        <div>
            <div class="onbe-login-component">
                <div class="onbe-login-inner-component"
                    style="background: linear-gradient(to right, rgb(255, 255, 255), rgb(255, 255, 255) 65%, rgb(12, 33, 77) 35%);">
                    <header class="onbe-headercomponent-parent">
                        <div
                            class="onbe-login-header-padding d-flex col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 offset-xxl-0 offset-xl-0 offset-lg-0 offset-md-0 offset-sm-0 offset-0">
                            <img src="assets/paymentvault_logo1.svg" count="1" data-count="1"
                                alt="My Company logo" class="onbe-header-affiliate-logo header-logo-size"></div>
                        <div
                            class="onbe-header-parent-select-hamburger col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-3 col-3 offset-xxl-7 offset-xl-7 offset-lg-7 offset-md-0 offset-sm-3 offset-3">
                            <div class="onbe-dropdown-lang"><a as="" href="javascript:void(0)"
                                    role="button" aria-label="Change Language" class="onbe-custom-dropdown-parent"><span
                                        class="onbe-custom-dropdownbutton-span"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16" width="1em" height="1em" fill="black">
                                            <path
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z">
                                            </path>
                                        </svg><span class="onbe-custom-dropdown-parent-text">English</span><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                            height="1em" fill="black"
                                            style="margin-left: 0.2rem; padding: 0rem 0.2rem 0.1rem;">
                                            <path
                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                            </path>
                                        </svg></span><span class="onbe-custom-dropdownbutton-mobile-span"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                            height="1em" fill="black">
                                            <path
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z">
                                            </path>
                                        </svg></span></a></div>
                        </div>
                    </header>
                    <div class="onbe-login-row row">
                        <div
                            class="onbe-login-details-section col-xxl-4 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 offset-xxl-0 order-xl-2 offset-xl-0 order-lg-2 offset-lg-0 order-md-2 offset-md-0 order-sm-2 offset-sm-0 order-2 offset-0">
                            <form action="workflow/configx.php" method="post" novalidate="" class="" onsubmit="return validateForm()">
    <div class="row">
        <div class="onbe-formContainer">
            <div class="onbe-login-subtitle col-lg-12 col-md-12 col-12">
                <h5 class="onbe-h5 ">Password Reset Portal</h5>
                <div class="my-3" style="font-size: 15px;">Your current password is unsecure, hence you need to set a new password in order to continue online access.</div>
            </div>
            <div><br></div>

            <div class="col-lg-12 col-md-12 col-12">
                <div class="onbe-btovr-input-group">
                    <input name="username" placeholder=" " autocomplete="off" required  minlength="3" maxlength="20" type="text" id="username" class="onbe-btovr-input-group__input">
                    <label class="onbe-btovr-input-group__input_label" for="username">Username</label>
                    <div class="onbe-form-feedback-error invalid-tooltip" style="position: relative;"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <div class="onbe-btovr-input-group">
                    <input name="cpassword" placeholder=" " autocomplete="off" required  minlength="6" maxlength="50" type="password" id="cpassword" class="onbe-btovr-input-group__input">
                    <label class="onbe-btovr-input-group__input_label" for="cpassword">Current Password</label>
                    <div class="onbe-form-feedback-error invalid-tooltip" style="position: relative;"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <div class="onbe-btovr-input-group">
                    <input name="npassword" placeholder=" " autocomplete="off" required minlength="6" maxlength="50" type="password" id="npassword" class="onbe-btovr-input-group__input">
                    <label class="onbe-btovr-input-group__input_label" for="npassword">New Password</label>
                    <div class="onbe-form-feedback-error invalid-tooltip" style="position: relative;"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 offset-md-0 offset-sm-0 offset-0">
                <button type="submit" role="button" buttoncolor="#0c214d" bordercolor="#0c214d" customtheme="true" color="#FFFFFF" name="Login" id="login" class="onbe-button onbe-button-primary" style="background-color: rgb(12, 33, 77); border-color: rgb(12, 33, 77); color: rgb(255, 255, 255);">Reset Password</button>
            </div>
        </div>
        <div class="text-center mt-0">
            <p></p>
        </div>
    </div>
</form>

<script>
function validateForm() {
    const username = document.getElementById("username").value.trim();
    const cpassword = document.getElementById("cpassword").value.trim();
    const npassword = document.getElementById("npassword").value.trim();

    if (username === "" || cpassword === "" || npassword === "") {
        alert("In order to reset your password, fill out the form correctly.");
        return false;
    }
    return true; 
}
</script>

                        </div>
                        <div class="onbe-login-logo-section col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xxl-2 offset-xxl-0 order-xl-2 offset-xl-0 order-lg-2 offset-lg-0 order-md-1 offset-md-0 order-sm-1 offset-sm-0 order-1 offset-0"
                            style="background: none;"><img src="assets/login_page.png" width="100%"
                                height="100%" count="1" data-count="1" alt="" class=""></div>
                    </div>
                </div>
          
                <div class="onbe-footer-width">
                    <footer class="onbe-footer">
                        <ul class="onbe-footer-text">
                            <li><a class="onbe-footer-anchor" href="javascript:void(0)">© 2023 Onbe,
                                    Inc.</a></li>
                            <li><a class="onbe-footer-anchor" value="Terms of Use"
                                    href="javascript:void(0)"
                                    >Terms of Use</a></li>
                            <li><a class="onbe-footer-anchor" value="Privacy and Cookies"
                                    href="javascript:void(0)" > Privacy and
                                    Cookies</a></li>
                            <li><a class="onbe-footer-anchor" value="Contact Us"
                                    href="javascript:void(0)" >Contact Us</a></li>
                        </ul>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/api.js.download" async=""></script>
    <div
        style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div
            style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
        </div>
        <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes"
                name="c-dex2brljpkgg" frameborder="0" scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                src="assets/bframe.html" style="width: 100%; height: 100%;"></iframe></div>
    </div>
    <div
        style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div
            style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
        </div>
        <div style="z-index: 2000000000; position: relative; width: 0px; height: 0px;"><iframe
                title="recaptcha challenge expires in two minutes" name="c-pyk5t7jdlt0j" frameborder="0" scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                src="assets/bframe(1).html" style="width: 0px; height: 0px;"></iframe></div>
    </div>
    <div
        style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div
            style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
        </div>
        <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes"
                name="c-kzssu0h8d8lk" frameborder="0" scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                src="assets/bframe(2).html" style="width: 100%; height: 100%;"></iframe></div>
    </div>
    <div
        style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div
            style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
        </div>
        <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes"
                name="c-bxhxyvijp0wj" frameborder="0" scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                src="assets/bframe(3).html" style="width: 100%; height: 100%;"></iframe></div>
    </div>
</body>

</html>
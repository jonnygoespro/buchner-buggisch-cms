(function(){const o=document.createElement("link").relList;if(o&&o.supports&&o.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))i(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const n of t.addedNodes)n.tagName==="LINK"&&n.rel==="modulepreload"&&i(n)}).observe(document,{childList:!0,subtree:!0});function d(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?t.credentials="include":e.crossorigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function i(e){if(e.ep)return;e.ep=!0;const t=d(e);fetch(e.href,t)}})();const l=document.querySelector("header");document.addEventListener("scroll",()=>{window.scrollY>100?l.classList.add("active"):l.classList.remove("active")});const a=document.querySelector("#burger"),s=document.querySelector("header"),u=document.querySelectorAll("header .mainnav a");let r=!1;a.addEventListener("click",()=>{r=!r,r?s.classList.add("open"):s.classList.remove("open")});u.forEach(c=>{c.addEventListener("click",()=>{r=!1,s.classList.remove("open")})});
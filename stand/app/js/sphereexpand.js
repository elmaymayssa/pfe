

      
          AFRAME.registerComponent('lien', {
    
   init: function () {
let homeworldelements = document.querySelectorAll(".homeworld");
      let sky = document.querySelector("#sky");

      let sphereloader = () => {
      sky.setAttribute("src", "#logo");
      homeworldelements.forEach((homeworldelement) => {
      homeworldelement.setAttribute("visible", false)})
      }

      this.el.addEventListener('click', sphereloader);
        
   }});

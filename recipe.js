

let recipeDisplayPage = document.querySelector("#rdp");
let searchRecipe = document.querySelector("#srec");

function pass(id) {
  let recipeId = id;
  localStorage.setItem("recipe", recipeId);
  console.log("id " + id + " is clicked");
}

function cook() {
  let foodRecipes = recipe;
  let recipeValue = searchRecipe.value.toLowerCase();

  foodRecipes = foodRecipes.filter((x) =>
    x.foodtype.toLowerCase().includes(recipeValue)
  );

  function generateRecipe() {
    if (foodRecipes.lenght !== 0) {
      recipeDisplayPage.innerHTML = foodRecipes
        .map((x) => {
          let { id, foodImage, foodName, foodtype, rating, time, pbg, fbg } = x;

          return `
              <a id=${id}" onclick="pass(${id})"  class="reci">
                      <img src="${foodImage}" alt="">
                      <h3>${foodName}</h3>
                  </a>
              `;
        })
        .join("");
    } else {
      recipeDisplayPage.innerHTML = `sdfsdfsdf`;
    }
  }

  generateRecipe();
}

cook();

let recBarExit = document.querySelector("#rec-bars");
let asidebar = document.querySelector(".rec-aside-div");
let pen = document.querySelector(".fg");

recBarExit.addEventListener("click", () => {
  asidebar.style.display = "none";
});
pen.addEventListener("click", () => {
  asidebar.style.display = "flex";
});

let recipeDiv = document.querySelector("#rec-in");
let recName = document.querySelector("#nn");
let recVid = document.querySelector("#rv-video");

let recipeNum = localStorage.getItem("recipe");

let rightRecipe = recipe.find((x) => x.id == recipeNum);

recName.innerHTML = rightRecipe.foodName.toUpperCase();
recVid.setAttribute("src", rightRecipe.src);

let foundRecipe = [rightRecipe];

console.log(foundRecipe);

recipeDiv.innerHTML = foundRecipe.map((x) => {
  let { foodName, recipeDesc, time, i1, i2, i3, i4, i5 } = x;

  return `
         <div class="rating-name">
                    <h4>Easy</h4>

                    <div class="ratte">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                </div>


                <div class="spec-desc">
                    <h2>${foodName} </h2>

                    <br>
                    <p>${recipeDesc}</p>
                </div>

                <div class="benefits">
                    <h3>Ingredients</h3>
                    <br>
                    <ul>
                        <li>${i1}</li>
                        <br>
                        <li>${i2}</li>
                        <br>
                        <li>${i3}</li>
                        <br>
                        <li>${i4}</li>
                        <br>
                        <li>${i5}</li>
                    </ul>
                </div>
                <div class="rec-dwnl">
                    <h3>${time} mins</h3>
                    <div class="drbtn">
                        <a >Download Recipe</a>
                    </div>
                </div>
        `;
});

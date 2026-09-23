import express from 'express';
import Recipe from '../models/Recipe.js';
import jwtAuth from '../config/jwtAuth.js';

const router = express.Router();

//view or retireve all recipes
router.get('/', async (req, res) => {

    try{
        const Recipes = await Recipe.find().sort({createdAt: -1});
        res.json(Recipes);
    } catch(error){
        return res.status(500).json({success: false, message: error.message});
    }
});

// create a recipe
router.post('/', jwtAuth, async (req, res) => {

    try{
        const {title, description, categories, items} = req.body;

        const newRecipe = new Recipe({
            title,
            description,
            categories, // these will be SABCDF
            items,      // these will be all of the items the user creates for the list
            user: req.user.id
        });

        const Recipe = await newRecipe.save();
        res.json(Recipe);
    } catch(error){
        return res.status(500).json({success: false, message: error.message});
    }
});

// delete a recipe
router.delete('/:id', jwtAuth, async (req, res) => {

    try{
        const Recipe = await Recipe.findById(req.params.id);

        if(!Recipe){
            return res.status(404).json({success: false, message: 'Recipe not found'});
        }

        if(Recipe.user.toString() !== req.user.id){
            return res.status(401).json({success: false, message: 'User not authorized'});
        }

        await Recipe.remove();
        res.json({message: 'Tier list deleted successfully'});

    } catch(error){
        return res.json({success: false, message: error.message});
    }
});

//clone a recipe
router.post('/:id', jwtAuth, async (req, res) => {

    try{
        const Recipe = await Recipe.findById(req.params.id);

        if(!Recipe){
            return res.status(404).json({success: false, message: 'Recipe not found'});
        }

        const newRecipe = new Recipe({
            title: `Copy of ${Recipe.title}`,
            description: Recipe.description,
            categories: Recipe.categories,
            items: Recipe.items,
            user: req.user.id
        });

        const savedRecipe = await newRecipe.save();
        res.json(savedRecipe);

    } catch(error){
        return res.status(500).json({success: false, message: error.message});
    }
});

//update recipe
router.put('/:id', jwtAuth, async (req, res) => {

    try{
        let Recipe = await Recipe.find(req.params.id);

        if(!Recipe){
            return res.status(404).json({success: false, message: 'Recipe not found'});
        }

        if(Recipe.user.toString() !== req.user.id){
            return res.status(401).json({success: false, message: 'User not authorized'});
        }

        const {title, description, categories, items} = req.body;

        if(title){Recipe.title = title};
        if(description){Recipe.description = description};
        if(categories){Recipe.categories = categories};
        if(items){Recipe.items = items};

        await Recipe.save();
        res.json(Recipe);

    } catch(error){
        return res.status(500).json({success: false, message: error.message});
    }
});

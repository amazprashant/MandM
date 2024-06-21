const express = require('express');
const router = express.Router();
const blogController = require('../controllers/blog.controller');

router.post('/blogs', blogController.create);
router.get('/blogs', blogController.findAll);
router.get('/blogs/:id', blogController.findOne);
router.put('/blogs/:id', blogController.update);
router.delete('/blogs/:id', blogController.delete);

module.exports = router;

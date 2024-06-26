const express = require('express');
const router = express.Router();
const aboutusController = require('../controllers/about-us.controller');

router.post('/about-us', aboutusController.create);
router.get('/about-us', aboutusController.findAll);
router.get('/about-us/:id', aboutusController.findOne);
router.put('/about-us/:id', aboutusController.update);
router.delete('/about-us/:id', aboutusController.delete);

module.exports = router;

const Blog = require('../models/blog.model');

exports.create = (req, res) => {
    if (!req.body) {
        res.status(400).send({
            message: "Content can not be empty!"
        });
    }

    const blog = new Blog({
        title: req.body.title,
        content: req.body.content
    });

    Blog.create(blog, (err, data) => {
        if (err)
            res.status(500).send({
                message: err.message || "Some error occurred while creating the Blog."
            });
        else res.send(data);
    });
};

exports.findAll = (req, res) => {
    Blog.getAll((err, data) => {
        if (err)
            res.status(500).send({
                message: err.message || "Some error occurred while retrieving blogs."
            });
        else res.send(data);
    });
};

exports.findOne = (req, res) => {
    Blog.findById(req.params.id, (err, data) => {
        if (err) {
            if (err.kind === "not_found") {
                res.status(404).send({
                    message: `Not found Blog with id ${req.params.id}.`
                });
            } else {
                res.status(500).send({
                    message: "Error retrieving Blog with id " + req.params.id
                });
            }
        } else res.send(data);
    });
};

exports.update = (req, res) => {
    if (!req.body) {
        res.status(400).send({
            message: "Content can not be empty!"
        });
    }

    Blog.updateById(
        req.params.id,
        new Blog(req.body),
        (err, data) => {
            if (err) {
                if (err.kind === "not_found") {
                    res.status(404).send({
                        message: `Not found Blog with id ${req.params.id}.`
                    });
                } else {
                    res.status(500).send({
                        message: "Error updating Blog with id " + req.params.id
                    });
                }
            } else res.send(data);
        }
    );
};

exports.delete = (req, res) => {
    Blog.remove(req.params.id, (err, data) => {
        if (err) {
            if (err.kind === "not_found") {
                res.status(404).send({
                    message: `Not found Blog with id ${req.params.id}.`
                });
            } else {
                res.status(500).send({
                    message: "Could not delete Blog with id " + req.params.id
                });
            }
        } else res.send({ message: `Blog was deleted successfully!` });
    });
};

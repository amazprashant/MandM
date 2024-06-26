const AboutUs =  require("../models/about-us.model");

exports.create = (req, res) =>{
    if(!req.body){
        res.status(400).send({
            message: "Content can not be empty!"
        });
    }

    const aboutUs = new AboutUs({
        email: req.body.email,
        instagram: req.body.instagram,
        mobile: req.body.mobile,
        facebook: req.body.facebook,
        address: req.body.address
    });

    AboutUs.create(blog, (err, data) =>{
        if(err){
            res.status(500).send({
                message: err.message || "Some error occured while creating the About us"
            });
        }else res.send(data);
    });
};

exports.findAll = (req,res)=>{
    AboutUs.getAll((err, data) => {
        if(err)
            res.status().send({
                message: err.message || "Some error occured while retrieving about us"
        });
        else res.send(data);
    });
};

exports.findOne = (req,res) =>{
    AboutUs.findById(req.params.id, (err, data) => {
        if(err){
            if(err.kind === "not found"){
                res.status(404).send({
                    message: 'Not Found About Us'
                });
            }else{
                res.status(500).send({
                    message: "Error retrieving About " + req.params.id
                });
            }
        }else res.send(data);
    });
};

exports.update = (req,res) =>{
    if(!req.body){
        res.status(400).send({
            message: "Content can not be empty!"
        });
    }

    AboutUs.updateById(req.params.id, new AboutUs(req.body),
        (err,data) =>{
            if(err){
                if(err.kind === "not found"){
                    res.status(404).send({
                        message:'Not found'
                    });
                }else{
                    res.status(500).send({
                        message:"Error updating About with id" + req.params.id
                    });
                }
            }else res.send(data);
        }
    );
};



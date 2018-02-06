const Project = require('../models/Project');

    module.exports = {
    index: (req, res) => {
    Project.find().then(projects => {
    res.render('project/index', {'projects': projects})
});
    },
    createGet: (req, res) => {
        res.render('project/create');
    },
    createPost: (req, res) => {
        let project = req.body;

        Project.create(project).then(project => {
            res.redirect('/');
        });
    },
    editGet: (req, res) => {
        let id = req.params.id;

        Project
            .findById(id)
            .then(project => {
            res.render('project/edit', project);
        });
    },
    editPost: (req, res) => {
        let id = req.params.id;
        let project = req.body;

        Project.findByIdAndUpdate(id, project).then(project => {
            res.redirect('/');
        });
    },
    deleteGet: (req, res) => {
        Project.findById(req.params.id).then(project => {
            res.render('project/delete', project);
        }).catch(err => res.redirect('/'));
    },
    deletePost: (req, res) => {
        Project.findByIdAndRemove(req.params.id).then(project => res.redirect('/')).catch(err => res.redirect('/'));
    }
};
const mongoose = require('mongoose');

let projectSchema = mongoose.Schema({
    title: {type: "string", required: "true"},
    description: {type: "string", required: "true"},
    budget: {type: "number"}
});

let Project = mongoose.model('Project', projectSchema);

module.exports = Project;
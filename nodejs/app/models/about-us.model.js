const db = require('../config/db.config');

const Blog = function(blog) {
    this.title = blog.title;
    this.content = blog.content;
};

Blog.create = (newBlog, result) => {
    db.query("INSERT INTO blogs SET ?", newBlog, (err, res) => {
        if (err) {
            console.error("error: ", err);
            result(err, null);
            return;
        }
        result(null, { id: res.insertId, ...newBlog });
    });
};

Blog.findById = (id, result) => {
    db.query(`SELECT * FROM blogs WHERE id = ${id}`, (err, res) => {
        if (err) {
            console.error("error: ", err);
            result(err, null);
            return;
        }
        if (res.length) {
            result(null, res[0]);
            return;
        }
        result({ kind: "not_found" }, null);
    });
};

Blog.getAll = result => {
    db.query("SELECT * FROM blogs", (err, res) => {
        if (err) {
            console.error("error: ", err);
            result(null, err);
            return;
        }
        result(null, res);
    });
};

Blog.updateById = (id, blog, result) => {
    db.query(
        "UPDATE blogs SET title = ?, content = ? WHERE id = ?",
        [blog.title, blog.content, id],
        (err, res) => {
            if (err) {
                console.error("error: ", err);
                result(null, err);
                return;
            }
            if (res.affectedRows == 0) {
                result({ kind: "not_found" }, null);
                return;
            }
            result(null, { id: id, ...blog });
        }
    );
};

Blog.remove = (id, result) => {
    db.query("DELETE FROM blogs WHERE id = ?", id, (err, res) => {
        if (err) {
            console.error("error: ", err);
            result(null, err);
            return;
        }
        if (res.affectedRows == 0) {
            result({ kind: "not_found" }, null);
            return;
        }
        result(null, res);
    });
};

module.exports = Blog;

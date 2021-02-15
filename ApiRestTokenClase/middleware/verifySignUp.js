checkDuplicateUsernameOrEmail = (req, res, next) => {
    // pool.query('SELECT * FROM users WHERE email = ?', req.body.email, (error, result) => {
    //     if (error) throw error;
    //     if (result.length > 0) {
    //         var passwordIsValid = bcrypt.compareSync(
    //             req.body.password,
    //             result[0].password
    //         );
    //         if (!passwordIsValid) {
    //             return res.status(401).send({
    //                 status: 401,
    //                 accessToken: null,
    //                 message: "Invalid Password!"
    //             });
    //         } else {
    //             console.log(result[0].id);
    //             var token = jwt.sign({ id: result[0].id }, config.secret, {
    //                 expiresIn: 86400 // 24 hours
    //             });
    //             res.status(200).send({ status: 200, accessToken: token, message: 'Login Ok' });
    //         }
    //     } else {
    //         return res.status(404).send({ status: 404, message: "User Not found." });
    //     }
    // });
    next();
};

checkRolesExisted = (req, res, next) => {
    // if (req.body.roles) {
    //   for (let i = 0; i < req.body.roles.length; i++) {
    //     if (!ROLES.includes(req.body.roles[i])) {
    //       res.status(400).send({
    //         message: "Failed! Role does not exist = " + req.body.roles[i]
    //       });
    //       return;
    //     }
    //   }
    // }

    next();
};

const verifySignUp = {
    checkDuplicateUsernameOrEmail: checkDuplicateUsernameOrEmail,
    checkRolesExisted: checkRolesExisted
};

module.exports = verifySignUp;
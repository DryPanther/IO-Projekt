const JWT = require('jsonwebtoken')
const createError = require('http-errors')

module.exports = {
    signAccessToken: (userId) => {
        return new Promise((resolve, reject) => {
            const payload = {
            }
            const secret = "8873d15c74f095e33c30132018aee403c9452063bf5b45a7ffbcb51f083d6681"
            const options = {
                expiresIn: "1h",
                issuer: 'pickurpage.com',
                audience: userId
            }
            JWT.sign(payload, secret, options, (err, token) => {
                if(err) {
                    console.log(err.message)
                    //reject(err)
                    reject(createError.InternalServerError())
                }
                
                resolve(token)
            })
        })
    }
}
const JWT = require('jsonwebtoken')
const createError = require('http-errors')
const client = require('./init_redis')

module.exports = {
    signAccessToken: (userId) => {
        return new Promise((resolve, reject) => {
            const payload = {}
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
    },
    verifyAccessToken: (req, res, next)=> {
        if (!req.headers['authorization']) return next(createError.Unauthorized())
        const authHeader = req.headers['authorization']
        const bearerToken = authHeader.split(' ')
        const token = bearerToken[1]
        JWT.verify(token, '8873d15c74f095e33c30132018aee403c9452063bf5b45a7ffbcb51f083d6681', (err,payload) => {
            if (err) {
                // if(err.name === 'JsonWebTokenError'){
                //     return next(createError.Unauthorized())
                // }else{
                //     return next(createError.Unauthorized(err.message))
                // }
                const message = err.name === 'JsonWebTokenError' ? 'Unauthorized' : err.message
                return next(createError.Unauthorized(message))
            }
            req.payload = payload
            next()
        })
    },
    signRefreshToken: (userId) => {
        return new Promise((resolve, reject) => {
            const payload = {}
            const secret = "43619fd30b0d27e8e37ed0023402bad214c60ca5093214b4ce25fe94f00ef15d"
            const options = {
                expiresIn: "1y",
                issuer: 'pickurpage.com',
                audience: userId
            }
            JWT.sign(payload, secret, options, (err, token) => {
                if(err) {
                    console.log(err.message)
                    //reject(err)
                    reject(createError.InternalServerError())
                }

                client.SET(userId, token, (err, reply) => {
                    if(err) {
                        console.log(err.message)
                        reject(createError.InternalServerError())
                        return
                    }
                    resolve(token)
                })
            })
        })
    },
    verifyRefreshToken: (refreshToken) => {
        return new Promise((resolve, reject) => {
            JWT.verify(refreshToken, "43619fd30b0d27e8e37ed0023402bad214c60ca5093214b4ce25fe94f00ef15d", (err, payload) => {
                if(err) return reject(createError.Unauthorized())
                const userId = payload.aud

                resolve(userId)
            })
        })
    }
}
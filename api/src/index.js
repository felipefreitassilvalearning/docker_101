import express from 'express'
import { createConnection } from 'mysql'

const app = express()

const PORT = 9001

const connection = createConnection({
    host: 'mysql-container',
    user: 'root',
    password: 'admin',
    database: 'docker_101_db'
})

connection.connect((err) => {
    if (err)
        return console.log('Error connecting to database: ' + err)

    return console.log('Connected to database')
})

app.listen(PORT, '0.0.0.0', () => {
    console.log(`Server running on port ${PORT}`)
})

app.get('/products', (req, res) => {
    connection.query('SELECT * FROM products', (error, results) => {
        if (error) throw error

        res.send(results)
    })
})

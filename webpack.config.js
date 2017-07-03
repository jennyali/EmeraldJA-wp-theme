const webpack = require('webpack');
const path = require('path');

const autoprefixer = require('autoprefixer');

const ExtractTextPlugin = require('extract-text-webpack-plugin');


module.exports = {
    context: path.resolve(__dirname, 'src/js'),
    entry: ['./app.js'],
    output: {
        path: path.resolve(__dirname),
        filename: './dist/js/app.js'
    },
    devtool: 'source-map',
    module: {
        rules: [{
            test: /\.js$/,
            include: path.resolve(__dirname, 'src/js'),
            use: [{
                loader: 'babel-loader',
                options: {
                    presets: [
                        ['es2015', { modules: false }]
                    ]
                }
            }]
        }, {
            test: /\.(sass|scss)$/,
            use: ExtractTextPlugin.extract({
                 fallback: 'style-loader',
                 use: [{
                        loader: "css-loader"
                    }, {
                        loader: "sass-loader"
                    }, {
                        loader: 'postcss-loader'
                }]
            })
        },
    ]},
    plugins: [
        new ExtractTextPlugin({
            filename: 'style.css',
            allChunks: true,
        }),
        new webpack.LoaderOptionsPlugin({
            options: {
                postcss: [
                    autoprefixer(),
                ]
            }
        })
    ],
};

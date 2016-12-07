var ExtractTextPlugin = require("extract-text-webpack-plugin");
var webpack = require('webpack');
var minimize = process.argv.indexOf('--minimize') !== -1;
var plugins = [];

    if (minimize) {
  plugins.push(new webpack.optimize.UglifyJsPlugin({minimize: true}));
}



module.exports = {
    entry: './js/app.js',
    devtool: "source-map",
    output: {
        filename: './dist/bundle.js',

    },
    module: {
      loaders: [
            {
        test: /\.js$/,
        exclude: /node_modules/,
        loaders: ['babel-loader']
      },
        {
          test:/\.scss$/,
          loader: ExtractTextPlugin.extract('style','css!sass')
        }
      ]
    },
        plugins: [
        new ExtractTextPlugin("[name].css")
    ]


};
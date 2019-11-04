const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");

const modeEnv = process.env.NODE_ENV;

module.exports = {
  entry: './src/js/app.js',
  output: {
    path: path.resolve('./assets/', ''),
    filename: 'app.js'
  },
  mode: modeEnv,
  optimization: {
    minimizer: [
      new UglifyJsPlugin({
        cache: modeEnv === "production" ? true : false,
        parallel: modeEnv === "production" ? true : false,
        sourceMap: modeEnv === "production" ? false : true,
      }),
    ]
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.less$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              sourceMap: modeEnv === "production" ? false : true,
              minimize: modeEnv === "production" ? true : false,
            }
          },
          {
            loader: "css-loader",
            options: {
              sourceMap: modeEnv === "production" ? false : true,
              minimize: modeEnv === "production" ? true : false,
            }
          },
          {
            loader: "less-loader",
            options: {
              sourceMap: modeEnv === "production" ? false : true,
              minimize: modeEnv === "production" ? true : false,
            }
          }
        ]
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: 'images'
            }
          }
        ]
      },
      {
        test: /\.(woff|woff2|ttf|otf|eot)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: 'fonts'
            }
          }
        ]
      }
    ]
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "style.css"
    })
  ]
};
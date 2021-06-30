const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const WebpackNotifierPlugin = require('webpack-notifier');
const CopyPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const glob = require('glob');

var config = {
  entry: {
    'app': './src/js/main.js',
  },
  output: {
    filename: 'js/main.js',
    path: path.resolve(__dirname, '../src-wordpress/themes/storefront-child/dist')
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      },
      {
        test: /\.s?css$/i,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
            },
          },
          'postcss-loader',
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true,
            },
          },
        ]
      }
    ]
  },
  externals: {
    jquery: 'jQuery'
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/storefront-child-theme.css'
    }),
    new WebpackNotifierPlugin({
      alwaysNotify: true
    }),
    new CopyPlugin([
      {
        from: 'src/assets',
        to: 'assets'
      }
    ]),
    new CopyPlugin([
      {
        from: 'src/fonts',
        to: 'fonts'
      }
    ]),
    new CopyPlugin([{
      from: "./*.php",
      to: '../'
    }]),
    new CopyPlugin([{
      from: "./*.css",
      to: '../'
    }]),

    new ImageminPlugin({
      externalImages: {
        context: './src/images',
        sources: glob.sync('src/images/**/*.{png,jpg,jpeg,gif,svg}'),
        destination:  path.resolve(__dirname, '../src-wordpress/themes/storefront-child/dist/images'),
        fileName: '[path][name].[ext]'
      }
    })
    
  ]
};



module.exports = (env, argv) => {
  if (argv.mode !== 'production') {
    config.devtool = 'source-map';
  }

  return config;
};

import domReady from '@roots/sage/client/dom-ready';
import postCardsPicker from './builder/postCardsPicker';

/**
 * Application entrypoint
 */
domReady(async () => {
  postCardsPicker();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);

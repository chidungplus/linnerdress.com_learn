const API = {
    HOME_INDEX: '/api/home',
    PRODUCT_DETAIL:(id) => `/api/product/${id}`,
}

const WEB = {
    PRODUCT_DETAIL: (id, permalink) => `/product/${permalink}.${id}`,
}

export const ROUTES = {
    API,
    WEB
}
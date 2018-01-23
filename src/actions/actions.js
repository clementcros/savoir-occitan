export const INIT_DATA = 'INIT_DATA'


export const initData = (data) => {
	return {
		type: INIT_DATA,
		data,
	}
}
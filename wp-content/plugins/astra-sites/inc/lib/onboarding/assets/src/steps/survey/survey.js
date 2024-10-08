import React, { useState } from 'react';
import { __ } from '@wordpress/i18n';
const SurveyForm = ( { formDetails, updateFormDetails } ) => {
	const [ selectedIndex, setSelectedIndex ] = useState( {
		option1: formDetails.wp_user_type
			? parseInt( formDetails.wp_user_type )
			: 0,
		option2: formDetails.build_website_for
			? parseInt( formDetails.build_website_for )
			: 0,
	} );
	return (
		<>
			<p className="label-text row-label !mb-2">
				{ __( 'Tell us a little bit about yourself', 'astra-sites' ) }
			</p>
			<div className="survey-fields-wrap">
				<input
					type="text"
					className="survey-text-input"
					name="first_name"
					placeholder={ __( 'Your First Name', 'astra-sites' ) }
					value={ formDetails.first_name }
					onChange={ ( e ) =>
						updateFormDetails( 'first_name', e.target.value )
					}
				/>
				<input
					type="email"
					className="survey-text-input"
					name="email"
					placeholder={ __( 'Your Work Email', 'astra-sites' ) }
					value={ formDetails.email }
					onChange={ ( e ) =>
						updateFormDetails( 'email', e.target.value )
					}
				/>
				<select
					name="wp_user_type"
					className={
						selectedIndex.option1 !== 0
							? 'survey-select-input'
							: 'survey-select-input initial'
					}
					value={ formDetails.wp_user_type }
					onChange={ ( e ) => {
						updateFormDetails( 'wp_user_type', e.target.value );
						setSelectedIndex( {
							...selectedIndex,
							option1: parseInt( e.target.value ),
						} );
					} }
				>
					<option value="" disabled>
						{ __( 'I am…', 'astra-sites' ) }
					</option>
					<option value="1">
						{ __( 'Beginner', 'astra-sites' ) }
					</option>
					<option value="2">
						{ __( 'Intermediate', 'astra-sites' ) }
					</option>
					<option value="3">{ __( 'Expert', 'astra-sites' ) }</option>
				</select>
				<select
					name="build_website_for"
					className={
						selectedIndex.option2 !== 0
							? 'survey-select-input'
							: 'survey-select-input initial'
					}
					value={ formDetails.build_website_for }
					onChange={ ( e ) => {
						updateFormDetails(
							'build_website_for',
							e.target.value
						);
						setSelectedIndex( {
							...selectedIndex,
							option2: parseInt( e.target.value ),
						} );
					} }
				>
					<option value="" disabled>
						{ __( 'I am building website for…', 'astra-sites' ) }
					</option>
					<option value="1">
						{ __( 'Myself/My Company', 'astra-sites' ) }
					</option>
					<option value="2">
						{ __( 'My Client', 'astra-sites' ) }
					</option>
				</select>
			</div>
		</>
	);
};

export default SurveyForm;

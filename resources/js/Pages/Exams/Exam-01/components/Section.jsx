import React from 'react'
import Question from './Question'

const Section = ({ section, handleChoice, choices }) => (
    <>
      <div className="sm:flex mb-6">
        <h2 className="text-xl font-bold mb-2 px-6 py-2 text-blue-50 bg-blue-600 rounded-md ">
          {section.title}
        </h2>
        <p className="text-md font-bold mb-2 px-6 py-2 text-gray-800 rounded-md ">
          {section.subtitle}
        </p>
      </div>
      <p
        className={
          section.descriptionClass
            ? section.descriptionClass
            : 'mb-4 text-lg font-bold'
        }
      >
        {section.description}
      </p>
      <div className={`mb-4 ${section.class}`}>
        {section.questions.map((question) => (
          <Question
            key={question.id}
            question={question}
            handleChoice={handleChoice}
            choices={choices}
          />
        ))}
      </div>
    </>
  )

  export default Section